<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_mainController extends Controller
{
    //
    public function index(){
        return view('admins.admin_dashboard');
    }
}
