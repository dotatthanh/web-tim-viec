<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Address;

class AddressController extends Controller
{
	public function index() {
		$addresses = Address::all();
		return view('admin.address.list', compact('addresses'));
	}

	public function create() {
		return view('admin.address.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.address.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		Address::destroy($id);
		return redirect()->back();
	}



    
}
