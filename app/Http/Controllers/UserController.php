<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	// public function userauth(){
	// 	if (Auth::attempt(['email'= $email, 'password' => $password])) {
	// 		return redirect()->intende('user/home');
	// 	}
	// }


public function viewmeds(){
    return view('user.viewmeds');
}
}
