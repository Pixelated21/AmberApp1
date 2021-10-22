<?php

namespace App\Http\Controllers\Payment\Authentication;

use App\Actions\Authentication\LoginAction;
use App\Http\Controllers\Payment\Controller;
use App\Http\Requests\Authentication\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('Authentication.login');
    }

    public function login(LoginAction $loginAction,LoginRequest $loginRequest){

        $loginAction->execute($loginRequest);

        return redirect('/dashboard');

    }
}
