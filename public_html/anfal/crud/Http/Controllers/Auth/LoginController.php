<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->route('/')->with('success', 'Logged in Successfully ');
        }
        else{
            return redirect()->route('login')->with('error1', 'Wrong email or password');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        \Session::flash('success',"logout");
        return redirect()->route('login');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
}
