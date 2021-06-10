<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect, Storage, Auth;
use App\Models\User;
use App\Models\Messages;


class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

    }

    public function index()
    {
        return view('layout.main');
    }
    public function login()
    {
        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }
    public function login_verify()
    {
        $login = Auth::attempt($this->request->except('_token'));
        if($login){

            return Redirect::route('app');
        }
        return Redirect::route('app.login')->withError('Invalid user credentials.....!');
    }
    public function registration_verify()
    {
        $this->request->merge([
           
            'password' =>bcrypt($this->request->password)
        ]);
        User::create(
            $this->request->except('_token')
        );
        return Redirect::route('app.login');
    }
    public function logout()
    {
        Auth::logout();

        return Redirect::route('app.login');
    }

}
