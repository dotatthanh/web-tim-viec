<?php

namespace App\Http\Controllers;

use App\Jobs\SendApplyNewJob;
use Illuminate\Http\Request;
use App\Category;
use App\Address;
use App\ApplyCV;
use App\JobSummary;
use App\User;
use Illuminate\Support\MessageBag;
use Validator;
use App\Notifications\JobApply;

class UserApplyController extends Controller
{
	public function listUserApply($jobID){
		$notifications = auth()->user()->unreadNotifications;
		$listCategory = Category::all();
		$listAddress = Address::all();
		$job = JobSummary::find($jobID);
		$listCV = $job->userApply()->paginate(5);

		return view('users.list-CV',['listCategory'=>$listCategory,'listAddress'=>$listAddress,'listCV'=>$listCV,'jobID'=>$jobID,'notifications' => $notifications]);
	}

	public function sendCV(Request $request){
		$rules = [
			'cv' => 'required'
		];
		$messages = [
			'required'=> 'Bạn chưa upload CV',
			
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
    		// return redirect()->back()->withErrors($validator)->withInput();
		} 
		$userApply = ApplyCV::where([['user_id','=',$request->user_id],['job_summary_id','=',$request->job_id]])->first();
		if($userApply != null){
			$errors = new MessageBag(['cvExist' => 'Thất bại. Bạn đã gửi CV cho công việc này']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}

		$request->file('cv')->move(
			'cv', //nơi cần lưu
			$request->file('cv')->getClientOriginalName()
		);
		$cv = new ApplyCV;
		$cv->user_id = $request->user_id;
		$cv->job_summary_id = $request->job_id;
		$cv->cv = "cv/".$request->file('cv')->getClientOriginalName();
		$cv->save();

		// Get info
		$idPost = $request->job_id;
		$user = JobSummary::find($idPost)->user;
		$cate = JobSummary::find($idPost)->category->name;

		$job = JobSummary::find($idPost);
		$user_id_post_job = JobSummary::find($request->job_id)->user_id;
		$data = [
			'message' => auth()->user()->name.' đã ứng tuyển trong tin "'.$job->title.'"',
			'job_id' => $job->id,
		];

		User::find($user_id_post_job)->notify(new JobApply($data));

		SendApplyNewJob::dispatch($user, $idPost, $cate);


		return response()->json(['error'=>false, 'email' => $user->email]);

	}

	
}
