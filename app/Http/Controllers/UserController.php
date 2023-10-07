<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserDetails::all();
        return view('dashboard')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_user()
    {
        return view('user/create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'description' => ['required'],

            'image' => ['required', 'mimes:jpeg,jpg,png,gif', 'max: 3000']
        ]);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(Public_path('userImage'), $imageName);

        $user = new UserDetails;
        $user->image =  $imageName;
        $user->name = $request->name;
        $user->description = $request->description;

        $user->save();
        return back()->withSuccess('User Added');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $user = UserDetails::where('id', $id)->first();
        return view('user/edit')->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'description' => ['required'],

            'image' => ['nullable', 'mimes:jpeg,jpg,png,gif', 'max: 3000']
        ]);
        $user = UserDetails::where('id', $id)->first();
        if (isset($request->image)) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(Public_path('userImage'), $imageName);
            $user->image =  $imageName;
        }


        $user->name = $request->name;
        $user->description = $request->description;

        $user->save();
        return back()->withSuccess('User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = UserDetails::where('id', $id)->first();
        $user->delete();
        return back()->withSuccess('User Deleted');
    }
}
