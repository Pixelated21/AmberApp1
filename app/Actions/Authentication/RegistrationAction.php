<?php

namespace App\Actions\Authentication;

use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegistrationRequest;
use App\Models\User;

class RegistrationAction{

    public function execute(RegistrationRequest $registrationRequest){

        User::create([
            'email' => $registrationRequest->email,
            'password' => $registrationRequest->password,
        ]);

    }

}
