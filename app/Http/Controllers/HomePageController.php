<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\UserDetails;
use App\Models\homecontents;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function viewHomePage()
    {
        $users = UserDetails::all();
        $contents = homecontents::all();
        $books = books::all();

        return view('homepage')->with('users', $users)->with('contents', $contents)->with('books', $books);
    }
}
