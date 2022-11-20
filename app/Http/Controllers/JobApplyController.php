<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Address;
use Illuminate\Support\Facades\Auth;

class JobApplyController extends Controller
{
    public function listJobApplied(){
		$listCategory = Category::all();
		$listAddress = Address::all();
		$user = Auth::user();
		$listJob = $user->jobApply()->paginate(5);

		$data = [
			'listCategory' => $listCategory,
			'listAddress' => $listAddress,
			'listJob' => $listJob
		];

		return view('users.list-job-applied', $data);
	}
}
