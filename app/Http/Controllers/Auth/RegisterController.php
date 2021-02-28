<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /* GET
*/
public function registrationForm()
{
    return view('custom_auth.register');
}

/* POST
*/
public function registerUser(Request $request)
{
    $validate = \Validator::make($request->all(), [
        'name' 		=> 'required',
        'email'	 	=> 'required|email|unique:users|max:255',
        'password' 	=> 'required|confirmed|max:255'
    ]);
    if( $validate->fails()){
        return redirect()
        ->back()
        ->withErrors($validate);
    }
    $user_create = \App\User::create([
        'password'   => bcrypt($request->password),
        'email'      => $request->email,
        'name'       => $request->name
    ]);
    return redirect()->route('register')->with('success', 'Successfully registered');
}

}
