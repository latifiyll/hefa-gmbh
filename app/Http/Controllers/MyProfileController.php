<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class MyProfileController extends Controller
{
    public function index(Request $request){


      return view('main.myprofile.index');
    }
}
