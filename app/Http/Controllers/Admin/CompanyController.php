<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\JobSummary;
use App\JobDetail;
class CompanyController extends Controller
{
	public function index() {
		$companies = Company::all();
		return view('admin.company.list', compact('companies'));
	}

	public function create() {
		return view('admin.company.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.company.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		$jobSummaries = JobSummary::where("company_id","=",$id)->get();
		if($jobSummaries->count()>0){		
			foreach ($jobSummaries as  $job) {
			# code...
				$jobDetail = $job->detail();
				$jobDetail->delete();
				$job->delete();
			}
		}
		Company::destroy($id);
		return redirect()->back();
	}

}
