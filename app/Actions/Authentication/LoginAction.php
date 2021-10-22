<?php

namespace App\Actions\Authentication;

use App\Http\Requests\Authentication\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginAction{

    public function execute(LoginRequest $loginRequest){


        Auth::attempt([
            'email' => $loginRequest->email,
            'password' => $loginRequest->password
        ]);

    }

}
