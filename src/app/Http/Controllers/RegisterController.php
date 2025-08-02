<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
     public function registerStep1()
    {
        return view('/register/step1');
    }

    public function registerStep2()
    {
        return view('/register/step2');
    }
}

