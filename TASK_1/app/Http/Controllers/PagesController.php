<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function Home(){
        return view('Home');
    }
    public function Service(){
        $services= array("Digital Marketing","Web Development","App Development");
        return view('Service')
        ->with('services',$services)
        ;
    }
    public function Team(){
        return view('Team');
    }
    public function About(){
        return view('About');
    }
    public function contact(){
        return view('Contact');
    }
}
