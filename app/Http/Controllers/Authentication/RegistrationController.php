<?php

namespace App\Http\Controllers\Payment\Authentication;

use App\Actions\Authentication\RegistrationAction;
use App\Http\Controllers\Payment\Controller;
use App\Http\Requests\Authentication\RegistrationRequest;

class RegistrationController extends Controller
{

    public function index(){
        return view('Authentication.registration');
    }

    public function register(RegistrationAction $registrationAction, RegistrationRequest $registrationRequest){

        $registrationAction->execute($registrationRequest);

        return redirect('/login');

    }
}
