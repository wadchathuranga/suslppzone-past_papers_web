<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class std_mainController extends Controller
{
    //
    public function index(){
        return view('students.std_home');
    }


    //
    public function contact(){
        return view('students.std_contact');
    }


    //
    public function about(){
        return view('students.std_about');
    }
}
