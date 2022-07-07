<?php

namespace App\Http\Controllers;

use App\Jobs\ReplyToApplyingUser;
use Illuminate\Http\Request;
use Validator;
use App\GuestEmail;

class MailController extends Controller
{
    public function setEmail(Request $request) {
    	if (isset($request->guestEmail)) {
    		$rule = [
	    		'guestEmail' => 'email|unique:guest_email,email'
	    	];

	    	$message = [
	    		'email' => 'The :attribute must be email.',
	    		'unique' => 'This email is registered.'
	    	];

	    	$validator = Validator::make($request->all(), $rule, $message);

	    	if ($validator->fails()) {
	    		return redirect()->back()->withErrors($validator);
	    	}

	    	$guestEmail = new GuestEmail;
	    	$guestEmail->email = $request->guestEmail;
	    	$guestEmail->save();

	    	return redirect()->back()->with('notification', 'Successfully registered email. Thank you!');
    	} else {
    		return redirect()->back()->with('notification', 'Email is empty!!');
    	}
    }

    public function replyEmail(Request $request) {
    	ReplyToApplyingUser::dispatch($request->email, $request->content_email);
    	return redirect()->back()->with('success', 'Successfully!!!');
    }
}
