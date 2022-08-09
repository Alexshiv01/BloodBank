<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donate;
use App\Models\donor;

class Pagescontroller extends Controller
{
    //
    public function index(){
        
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }
    
    public function signin(){
        return view('pages.signin');
    }
    public function bloodrequest(){
        return view('pages.bloodrequest');
    }
  
}
    

