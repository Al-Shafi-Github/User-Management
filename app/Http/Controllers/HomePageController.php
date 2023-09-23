<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function viewHomePage(){
        if(auth()->check()){
            return view('dashboad');
        }
        else{
            return view('homepage');
        }
        
    }
}
