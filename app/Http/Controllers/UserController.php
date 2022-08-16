<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Search;
use App\User;
use App\Company;
use App\Address;
use App\JobSummary;
use App\Category;
use App\JobFavorite;
use App\Profile;
use Illuminate\Support\MessageBag;
use Validator;
use Hash;
use Mail;
use App\Jobs\SendNewPassword;

class UserController extends Controller
{
	public function home(){
		$notifications = [];
		if (auth()->user()) {
			$notifications = auth()->user()->unreadNotifications;
		}
		$member = User::where('deleted','=','false')->count();
		$company = Company::count();
		$job = JobSummary::count();
		$jobSummary = JobSummary::orderBy('id','desc')->take(5)->get();
		$listCategory = Category::all();
		$listAddress = Address::all();
		
		// if (auth()->user() && auth()->user()->role_id == 3)
			$jobSuggests = $this->jobSuggestBySearch();
		// else
		// 	$jobSuggests = [];

		$dataView = [
			'notifications' => $notifications,
			'cmember'=>$member,
			'ccompany'=>$company,
			'cJob'=>$job,
			'jobSummary'=>$jobSummary,
			'active_home'=>true,
			'listCategory'=>$listCategory,
			'jobSuggests'=>$jobSuggests ?? [],
			'listAddress'=>$listAddress
		];
		return view('users.home', $dataView);
	}

	public function showLogin(){
		return view('login');
	}

	public function login(Request $request){
		$email = $request['email'];
		$password = $request['password'];
		if(Auth::attempt(['email'=>$email,'password'=>$password])){
			$userLogin = Auth::user();
			if($userLogin->deleted==true){
				return view('login',['error'=>"Tài khoản này đã bị vô hiệu hóa."]);
			}

			$lastLogin = Auth::user()->last_login;
			$last30Days = $date = Carbon::now()->subDays(30)->toDateTimeString();
			// Tat che do tim viec
			if ($lastLogin < $last30Days) {
				User::where('email', $email)->update([
					'status' => 0
				]);
			}
			User::where('email', $email)->update([
				'last_login' => Carbon::now()->toDateTimeString()
			]);
			return redirect()->route('home');
		}
		else {
			return view('login',['error'=>"Kiểm tra lại email hoặc mật khẩu."]);
		}
	}

	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect()->route('home');
		} else {
			return redirect()->route('home');
		}
	}

	public function showSignup(){
		$listCompany = Company::all();
		$listAddress = Address::all();
		$listCategory = Category::all();

		return view('signup',[
			'listCategory'=>$listCategory,
			'listCompany'=>$listCompany,
			'listAddress'=>$listAddress
		]);
	}

	public function signup(Request $request){
		// dd($request->all());
		$rules = [
			'email' => 'unique:users,email|email|required',
			'password' => 'required|min:6',
			'cpassword' => 'required|same:password',
			'fullName' => 'required'
		];
		$messages = [
			'required'=> 'Không được để trống thông tin nào',
			'email.email' => 'Email không đúng định dạng',
			'email.unique' => 'Email đã được đăng kí',
			'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
			'cpassword.same' => "Chưa nhập đúng lại mật khẩu"
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
    		// return redirect()->back()->withErrors($validator)->withInput();
		} 
		if($request->role == 2 && $request->company_id == 0){
			$errors = new MessageBag(['errorCompany' => 'Hãy chọn công ty của bạn']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}

		if($request->role == 3){
			if ($request->category_id == 0) {
				$errors = new MessageBag(['errorCategory' => 'Hãy chọn ngành nghề của bạn']);
				return response()->json(['error'=>true,'message'=> $errors]);
			}
			if ($request->address_id == 0) {
				$errors = new MessageBag(['errorAddress' => 'Hãy chọn địa điểm của bạn']);
				return response()->json(['error'=>true,'message'=> $errors]);
			}
			if ($request->experience == null) {
				$errors = new MessageBag(['errorExperience' => 'Hãy bổ sung kinh nghiệm của bạn']);
				return response()->json(['error'=>true,'message'=> $errors]);
			}
			if ($request->education == null) {
				$errors = new MessageBag(['errorEducation' => 'Hãy bổ sung bằng cấp của bạn']);
				return response()->json(['error'=>true,'message'=> $errors]);
			}
			if ($request->age == null) {
				$errors = new MessageBag(['errorAge' => 'Hãy bổ sung tuổi của bạn']);
				return response()->json(['error'=>true,'message'=> $errors]);
			}
		}

		$user = new User;
		$user->name = $request->fullName;
		$user->password = bcrypt($request->password);
		$user->email = $request->email;
		$user->role_id = $request->role;

		if($request->role == 2)
			$user->company_id = $request->company_id;
		else
			$user->company_id = null;

		$user->deleted = false;
		$user->save();
		
		if ($request->role == 3) {
			Profile::create([
				'user_id' => $user->id,
				'category_id' => $request->category_id,
				'address_id' => $request->address_id,
				'experience' => $request->experience,
				'education' => $request->education,
				'sex' => $request->sex,
				'age' => $request->age,
			]);
		}

		return response()->json(['error'=>false]);

	}

	public function showResetPassword(){
		return view('reset-password');
	}

	public function changePassword(Request $request){
		$userLogin = Auth::user();

		if(!Hash::check($request->cuPassword,$userLogin->password)){
			$errors = new MessageBag(['errorPassword' => 'Hãy nhập đúng mật khẩu hiện tại']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}
		$rules = [
			'cuPassword' => 'required',
			'nPassword' => 'required|min:6',
			'cPassword' => 'required|same:nPassword'
		];

		$messages = [
			'required'=> 'Không được để trống thông tin nào',
			'nPassword.min' => 'Mật khẩu có ít nhất 6 kí tự',
			'cPassword.same' => "Chưa nhập đúng lại mật khẩu mới"
		];

		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		} 

		else {
			User::where('id',$userLogin->id)->update(['password'=>bcrypt($request->nPassword)]);
			return response()->json(['error'=>false]);
		}
	}

	public function forgotPassword(Request $request){
		if($request->email==''){
			return response()->json(['error'=>true,'message'=>'Không được để trống địa chỉ email']);
		}

		$user = User::where('email',$request->email)->first();
		if($user==null){
			return response()->json(['error'=>true,'message'=>'Email này chưa được đăng kí.']);
		}

		$npassword = str_random(8);
		User::where('email',$request->email)->update(['password'=>bcrypt($npassword)]);
		SendNewPassword::dispatch($npassword, $request->email);
		return response()->json(['error'=>false,'message'=>'Lấy lại mật khẩu mới trong email của bạn.']);
		
	}

	public function getRecruit(){
		$notifications = [];
		if (auth()->user()) {
			$notifications = auth()->user()->unreadNotifications;
		}

		$user=User::find(Auth::user()->id);
		$listRecruit = $user->myRecruit()->paginate(5);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.my-recruit',["listRecruit"=>$listRecruit,'listCategory'=>$listCategory,'listAddress'=>$listAddress,'notifications' => $notifications]);
	}
	
	public function deleteRecruit(Request $request){
		$userLogin = Auth::user();
		$recruit = JobSummary::where([['user_id','=',$userLogin->id],['id','=',$request->idJob]])->first();
		if($recruit!=null){
			if($recruit->detail!=null){
				$recruit->detail->delete();
			}
			$recruit->delete();
			return response()->json(['message'=>true,'idJob'=>$request->idJob]);
		}
	}
	
	public function formEditInfo(){
		$listCompany = Company::all();
		$listAddress = Address::all();
		$listCategory = Category::all();

		$viewData = [
			'listCategory' => $listCategory,
			'listCompany' => $listCompany,
			'listAddress' => $listAddress,
		];
		return view('users.edit-info', $viewData);
	}
	
	public function updateInfo(Request $request){
		// dd($request->all());
		$rules = [
			'email' => 'email|required',
			'fullName' => 'required',
			// 'career' => 'required'
		];

		if ($request->role == 3) {
			$rules['category_id'] = 'required';
			$rules['address_id'] = 'required';
			$rules['experience'] = 'required';
			$rules['education'] = 'required';
			$rules['age'] = 'required';
		}

		$messages = [
			'required'=> 'Không được để trống thông tin nào',
			'email.email' => 'Email không đúng định dạng',
			// 'career.required' => 'Tên ngành nghề không được để trống',
		];

		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		} 

		if($request->role == 2 && $request->company_id == 0){
			$errors = new MessageBag(['errorCompany' => 'Hãy chọn công ty của bạn']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}

		if($request->email != Auth::user()->email && User::where('email','=',$request->email)->first()!=null){
			$errors = new MessageBag(['errorEmail' => 'Email này đã được đăng kí']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}

		$user = Auth::user();
		$user->name = $request->fullName;
		$user->email = $request->email;
		$user->role_id = $request->role;
		$user->status = $request->status;
		// $user->career = $request->career;
		// $user->experience = $request->experience;

		if($request->role == 2)
			$user->company_id = $request->company_id;
		else 
			$user->company_id = null;
		
		$user->deleted = false;
		$user->update();

		if ($request->role == 3) {
			$user->profile->update([
				'category_id' => $request->category_id,
				'address_id' => $request->address_id,
				'experience' => $request->experience,
				'education' => $request->education,
				'sex' => $request->sex,
				'age' => $request->age,
			]);
		}

		return response()->json(['error'=>false]);
	}

	public function jobSuggestBySearch() {
		$jobs = JobSummary::query();
		$dataSearch = Search::where('user_id', null)->orderBy('id', 'desc')->limit(1)->get();
		$arrIds = [];
		$tmp = [];
		$user = auth()->user();

		if ($user && $user->status == 1) { // Dang tim viec
			$dataSearch = Search::where('user_id', $user->id)->orderBy('id', 'desc')->limit(1)->get();
		}


		if ($dataSearch->count() > 0) {
			foreach ($dataSearch as $item) {
				// Search theo công ty
				if ($user && $user->status == 1 && isset($item->company_name)) {
					$jobs = $jobs->whereHas('company', function ($query) use($item) {
						$query->where('name', 'like', '%'.$item->company_name.'%');
					});
				}
			
				// Search theo nghề
				// if ($user && $user->status == 1) {
				// 	$jobs = $jobs->where('category_id', $user->profile->category_id);
				// }
				// else
				if ($user && $user->status == 1 && isset($item->category)) {
					$jobs = $jobs->where('category_id', $item->category);
				}
				
				
				// Search theo địa chỉ
				// if ($user && $user->status == 1) {
				// 	$jobs = $jobs->where('address_id', $user->profile->address_id);
				// }
				// else
				if ($user && $user->status == 1 && isset($item->address)) {
					$jobs = $jobs->where('address_id', $item->address);
				}

				// Search theo mức lương
				if ($user && $user->status == 1 && isset($item->salary)) {
					switch ($item->salary) {
						case "7 – 10 triệu":
							$jobs = $jobs->whereHas('detail', function ($query) use($item) {
								$query->whereIn('salary', ['7000000', '10000000']);
							});
						break;
						case "10 – 15 triệu":
							$jobs = $jobs->whereHas('detail', function ($query) use($item) {
								$query->whereIn('salary', ['10000000', '15000000']);
							});
						break;
						case "15 – 20 triệu":
							$jobs = $jobs->whereHas('detail', function ($query) use($item) {
								$query->whereIn('salary', ['15000000', '20000000']);
							});
						break;
						case "> 20triệu":
							$jobs = $jobs->whereHas('detail', function ($query) use($item) {
								$query->where('salary', '>', '20000000');
							});
						break;
						default:
					}
				}
				
				// Search theo kinh nghiệm
				// if ($user && $user->status == 1) {
				// 	$jobs = $jobs->whereHas('detail', function ($query) use($user) {
				// 		$query->where('experience', 'like', '%'.$user->profile->experience.'%');
				// 	});
				// }
				// else
				if ($user && $user->status == 1 && isset($item->experience)) {
					$jobs = $jobs->whereHas('detail', function ($query) use($item) {
						$query->where('experience', 'like', '%'.$item->experience.'%');
					});
				}
			}
		}
		else {
			// Search theo nghề
			if ($user && $user->status == 1) {
				$jobs = $jobs->where('category_id', $user->profile->category_id);
			}
			
			// Search theo địa chỉ
			if ($user && $user->status == 1) {
				$jobs = $jobs->where('address_id', $user->profile->address_id);
			}
			
			// Search theo kinh nghiệm
			if ($user && $user->status == 1) {
				$jobs = $jobs->whereHas('detail', function ($query) use($user) {
					$query->where('experience', 'like', '%'.$user->profile->experience.'%');
				});
			}
		}

		foreach ($jobs->get() as $item) {
			$arrIds[] = $item->id;
		}	

		$jobIds = array_unique(array_values($arrIds));

		$jobs = JobSummary::whereIn('id', $jobIds)->limit(15)->get();

		return $jobs;
	}

	public function markAsRead()
	{
		auth()->user()->unreadNotifications->markAsRead();
	}
}
