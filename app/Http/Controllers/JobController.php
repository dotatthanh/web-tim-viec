<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Search;
use App\JobSummary;
use App\JobDetail;
use App\Address;
use App\Company;
use App\ApplyCV;
use App\Mail\NewPost;
use App\GuestEmail;
use App\Jobs\SendNewPostEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Validator;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    //
	public function showJob(Request $request){
		$notifications = [];
		if (auth()->user()) {
			$notifications = auth()->user()->unreadNotifications;
		}

		$jobs = JobSummary::orderBy('id','DESC')->paginate(5);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.search-resume',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'listAddress'=>$listAddress, 'request' => $request,'notifications' => $notifications]);
	}

	public function searchJob(Request $request){
		// $listCategory = Category::all();
		// if($request->address == '' && $request->category == ''){
		// 	$jobs = JobSummary::selectRaw('job_summaries.*')
		// 	->join('companies','companies.id','=','job_summaries.company_id')
		// 	->where('companies.name','like','%'.$request->company.'%')
		// 	->orderBy('id','DESC')
		// 	->paginate(5);

		// }
		// else if($request->address != '' && $request->category == ''){
		// 	$addr = (int)$request->address;
		// 	$jobs = JobSummary::selectRaw('job_summaries.*')
		// 	->join('companies','companies.id','=','job_summaries.company_id')
		// 	->join('address','address.id','=','job_summaries.address_id')
		// 	->where([['companies.name','like','%'.$request->company.'%'],['address.id','=',$addr]])
		// 	->orderBy('id','DESC')
		// 	->paginate(5);
		// }
		// else if($request->address == '' && $request->category != ''){
		// 	$cate = (int)$request->category;
		// 	$jobs = JobSummary::selectRaw('job_summaries.*')
		// 	->join('companies','companies.id','=','job_summaries.company_id')
		// 	->join('categories','categories.id','=','job_summaries.category_id')
		// 	->where([['companies.name','like','%'.$request->company.'%'],['categories.id','=',$cate]])
		// 	->orderBy('id','DESC')
		// 	->paginate(5);
		// }
		// else {
		// 	$addr = (int)$request->address;
		// 	$cate = (int)$request->category;
		// 	$jobs = JobSummary::selectRaw('job_summaries.*')
		// 	->join('companies','companies.id','=','job_summaries.company_id')
		// 	->join('categories','categories.id','=','job_summaries.category_id')
		// 	->join('address','address.id','=','job_summaries.address_id')
		// 	->where([['companies.name','like','%'.$request->company.'%'],['categories.id','=',$cate],['address.id','=',$addr]])
		// 	->orderBy('id','DESC')
		// 	->paginate(5);
		// }

		
		// $listAddress = Address::all();
		// return view('users.search-resume',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'listAddress'=>$listAddress,'companySearch'=>$request->company]);

		$listAddress = Address::all();
		$listCategory = Category::all();
		$notifications = [];
		if (auth()->user()) {
			$notifications = auth()->user()->unreadNotifications;
		}


		$jobs = JobSummary::query();

		if (isset($request->company)) {
			$jobs = $jobs->whereHas('company', function ($query) use($request) {
				$query->where('name', 'like', '%'.$request->company.'%');
			});
		}

		if (isset($request->category)) {
			$jobs = $jobs->where('category_id', $request->category);
		}

		if (isset($request->address)) {
			$jobs = $jobs->where('address_id', $request->address);
		}

		if (isset($request->salary)) {
			$jobs = $jobs->whereHas('detail', function ($query) use($request) {
				$query->where('salary', 'like', '%'.$request->salary.'%');
			});
		}

		if (isset($request->experience)) {
			$jobs = $jobs->whereHas('detail', function ($query) use($request) {
				$query->where('experience', 'like', '%'.$request->experience.'%');
			});
		}

		$this->saveDataSearch($request->all());

		$jobs = $jobs->orderBy('id','DESC')->paginate(5);

		return view('users.search-resume',[
			'jobs' => $jobs,
			'request' => $request,
			'active_job' => true,
			'listCategory' => $listCategory,
			'listAddress' => $listAddress,
			'notifications' => $notifications,
			'companySearch' => $request->company
		]);
	}

	public function findByCategory($id) {
		$notifications = [];
		if (auth()->user()) {
			$notifications = auth()->user()->unreadNotifications;
		}

		$jobs = JobSummary::where('category_id',$id)->paginate(5);
		$category = Category::find($id);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.job-category',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'category'=>$category,'listAddress'=>$listAddress,'notifications' => $notifications]);

	}

	public function showJobDetail($id){
		$notifications = [];
		if (auth()->user()) {
			$notifications = auth()->user()->unreadNotifications;
		}

		$url =  URL::current();
		$jobSummary = JobSummary::find($id);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.job-detail',['jobSummary'=>$jobSummary,'listCategory'=>$listCategory,'url'=>$url,'listAddress'=>$listAddress, 'notifications' => $notifications]);
	}

	public function showPostJob(){
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.post-job',['listCategory'=>$listCategory,'listAddress'=>$listAddress]);
	}

	public function sendMail($jobInfo){
		$guestEmails = GuestEmail::all();

		if (count($guestEmails) > 0) {
			foreach ($guestEmails as $email) {
				SendNewPostEmail::dispatch($email, $jobInfo);
			}
		}
	}

	public function addJob(Request $request){
		$jobSummary = new JobSummary;
		$jobDetail = new JobDetail;

		$jobDetail->salary = $request->salary;
		$jobDetail->experience = $request->experience;
		$jobDetail->education = $request->education;
		$jobDetail->quantity = $request->quantity;
		$jobDetail->position = $request->position;
		$jobDetail->gender = $request->gender;
		$jobDetail->age = $request->age;
		$jobDetail->expiration_date = $request->expiration_date;
		$jobDetail->job_description = $request->job_description;
		$jobDetail->benefit = $request->benefit;
		$jobDetail->other_requirement = $request->other_requirement;
		$jobDetail->save();

		$jobSummary->title = $request->title;
		$jobSummary->description = $request->description;
		$jobSummary->category_id = $request->category_id;
		$jobSummary->company_id = Auth::user()->company_id;
		$jobSummary->address_id = $request->address_id;
		$jobSummary->user_id = Auth::user()->id;
		$jobSummary->job_detail_id = $jobDetail->id;
		$jobSummary->save();

		// Get the new job of the information 
		$jobCate = Category::find($jobSummary->category_id);
		$jobCompany = Company::find($jobSummary->company_id);
		$jobSalary = $jobDetail->salary;
		$jobAddress = Address::find($jobSummary->address_id);
		$jobInfo = array('category' => $jobCate->name, 'company' => $jobCompany->name, 'salary' => $jobSalary, 'address' => $jobAddress->name, 'id' => $jobDetail->id);
		$this->sendMail($jobInfo);

		return response()->json(["error"=>false]);
	}

	public function saveDataSearch($params) {
		Search::create($params);
		return '';
	}
}
