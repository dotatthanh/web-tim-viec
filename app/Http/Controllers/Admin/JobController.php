<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSummary;
use App\Category;
class JobController extends Controller
{
	public function index() {
		$jobs = JobSummary::all();
		$data = [
			'jobs' => $jobs, 
		];
		return view('admin.jobSummary.list', $data);
	}

	public function create() {
		$categories = Category::all();
		$data = [
			'categories' => $categories, 
		];

		return view('admin.jobSummary.add', $data);
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.jobSummary.edit');
	}

	public function update() {

	}

	public function destroy(Request $request, $id) {
		$jobDetail = JobSummary::find($id)->detail();
		$jobDetail->delete();
		JobSummary::destroy($id);
		return redirect()->back();
	}



}
