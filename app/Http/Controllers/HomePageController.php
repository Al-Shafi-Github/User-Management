<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function viewHomePage()
    {
        $users = UserDetails::all();
        return view('homepage')->with('users', $users);
    }
}
