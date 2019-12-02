<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:web', ['except' => ['logout']]);
    }
    public function showLoginForm(){
        return view('auth.admin_login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);
        if(Auth::guard('web')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
