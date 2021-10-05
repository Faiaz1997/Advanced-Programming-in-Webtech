<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    //public function registration(){
        //return view('registration');
    //}
    public function contact(){
        return view('contact');
    }
}

