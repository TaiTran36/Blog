<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
	public function __construct(){
        $this->middleware('guest:web', ['except' => ['logout']]);
    }

    public function showLoginForm(){

        return view('auth.admin_login');
    }
    //
}
