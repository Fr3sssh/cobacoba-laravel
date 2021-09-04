<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function loginPage(){
        return view('auth.login'); //untuk view ngarahin repository pake titik
    }
}
