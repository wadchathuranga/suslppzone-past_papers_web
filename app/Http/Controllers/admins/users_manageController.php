<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class users_manageController extends Controller
{
    //
    public function index(){
        return view('admins.users_manage');
    }
}
