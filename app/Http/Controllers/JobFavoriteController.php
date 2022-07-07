<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company;
use App\Address;
use App\JobSummary;
use App\Category;
use App\JobFavorite;


class JobFavoriteController extends Controller
{
	public function addJobFavorite(Request $request){
		if(!Auth::check()){
			return response()->json(['error'=>true,'message'=>'Đăng nhập ngay']);
		}else{
			$userLogin = Auth::user();

			$jobFavorite = JobFavorite::where([['user_id','=',$userLogin->id],['job_id','=',$request->idJob]])->first();
			if($jobFavorite!=null){
				$jobFavorite->delete();
				return response()->json(['error'=>false,'message'=>false,'idJob'=>$request->idJob]);
			}
			$favorite = new JobFavorite;
			$favorite->user_id = $userLogin->id;
			$favorite->job_id = $request->idJob;
			$favorite->save();

			return response()->json(['error'=>false,'message'=>true,'idJob'=>$request->idJob]);
		}
	}

	public function listFavorite(){
		$listCategory = Category::all();
		$listAddress = Address::all();
		$user = User::find(Auth::user()->id);
		$listJob = $user->jobFavorite()->paginate(5);
		return view('users.list-favorite',['listCategory'=>$listCategory,'listAddress'=>$listAddress,'listJob'=>$listJob]);
	}

	public function deleteJobFavorite(Request $request){
		$userLogin = Auth::user();
		$jobFavorite = JobFavorite::where([['user_id','=',$userLogin->id],['job_id','=',$request->idJob]])->first();
		if($jobFavorite!=null){
			$jobFavorite->delete();
			return response()->json(['message'=>true,'idJob'=>$request->idJob]);
		}
	}
}
