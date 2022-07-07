<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\JobSummary;
use App\JobDetail;
class UserController extends Controller
{
    public function index() {
		$users = User::all();
		return view('admin.user.list', compact('users'));
	}

	public function create() {
		return view('admin.user.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.user.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		$user = User::find($id);
		
		$jobSummaries = JobSummary::where("user_id","=",$user->id)->get();
		if($jobSummaries->count()>0){		
			foreach ($jobSummaries as  $job) {
			# code...
				$jobDetail = $job->detail();
				$jobDetail->delete();
				$job->delete();
		}
	}

		$user->delete();
		
		return redirect()->back();
	}

}
