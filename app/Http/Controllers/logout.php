<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logout extends Controller
{
    public function logout(){
     $var = auth::user();
     Auth::logout($var);

     return redirect(url('login'));
    }
}
