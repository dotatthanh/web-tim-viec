<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\MessageBag;
use Validator;
class CompanyController extends Controller
{
    //
	public function findByCompany(Request $request){
		
		$arrCompany = Company::where('name','like','%'.$request->company.'%')->get()->toArray();
		$company = array();
		foreach ($arrCompany as $value) {
			# code..
			$company[] = $value['name'];
		}

		return response()->json(['company'=>$company]);
	}

	public function signupCompany(Request $request){
		$rules = [
			'nameCompany' => 'required',
			'linkCompany' => 'required',
			'addressCompany' => 'required',
			'logoCompany' => 'required|mimes:jpeg,jpg,png'
		];
		$messages = [
			'required'=> 'Không được để trống thông tin nào',
			'mimes' => 'Hình ảnh tải lên không hợp lệ (jpeg,jpg,png)',
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
    		// return redirect()->back()->withErrors($validator)->withInput();
		} 
		if(!$request->hasFile('logoCompany')){
			$errors = new MessageBag(['logoCompany' => 'Không được để trống thông tin nào']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}
		$request->file('logoCompany')->move(
			'logo_company', //nơi cần lưu
			$request->file('logoCompany')->getClientOriginalName()
		);
		$company = new Company;
		$company->name = $request->nameCompany;
		$company->link = $request->linkCompany;
		$company->logo = "logo_company/".$request->file('logoCompany')->getClientOriginalName();
		$company->address_id = $request->addressCompany;
		$company->save();
		return response()->json(['error'=>false,'company'=>$company]);
	}

	
}
