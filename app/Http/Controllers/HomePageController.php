<?php

namespace App\Http\Controllers;

use App\Models\homecontents;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function viewHomePage()
    {
        $users = UserDetails::all();
        $contents = homecontents::all();

        return view('homepage')->with('users', $users)->with('contents', $contents);
    }
}
