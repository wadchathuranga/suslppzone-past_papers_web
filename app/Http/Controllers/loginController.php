<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //view login page
    public function index(){
        return view('login');
    }
}
