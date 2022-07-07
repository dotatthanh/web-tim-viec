<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\JobSummary;

class CategoryController extends Controller
{
	public function index() {
		$categories = Category::all();
		return view('admin.category.list', compact('categories'));
	}

	public function create() {
		return view('admin.category.add');
	}

	

	public function store() {
		// add 

	} 

	
	public function getEdit($id){
		$categories = Category::find($id);
    // Load user/createOrUpdate.blade.php vi	ew
		return view('admin.category.edit', compact('categories'));
	}
	
	public function postEdit(Request $request,$id){
		$categories = Category::find($id);
		$categories -> name = $request -> name;
		$categories -> save();
		return redirect('admin/categories/edit/'.$id)->with('thongbao','Sửa thành công');
	}

	public function update(Request $request) {
		$categories = new Category;
		$categories -> name=$request -> name;
		$categories -> code=$request -> code;
		$categories -> save();
		return redirect('admin/categories/create/')->with('thongbao','Thêm thành công');
	}

	public function destroy($id) {
		
		$jobSumaries = 	JobSummary::where("category_id","=",$id)->get();
		if($jobSummaries->count()>0){
			foreach ($jobSumaries as $jobSummary) {
				$jobDetail = $jobSummary->detail();
				$jobDetail->delete();
				$jobSummary->delete();
			}
		}
		Category::destroy($id);
		return redirect()->back();
	}

}
