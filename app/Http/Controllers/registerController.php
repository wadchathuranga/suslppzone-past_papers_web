<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    //view register page
    public function index(){
        return view('register');
    }
}
