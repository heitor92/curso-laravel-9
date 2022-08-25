<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        //$user = User::where('id', '=', $id)->first();
        $user = User::find($id);
        if (!$user)
            return redirect()->route('users.index');
            //return redirect()->back();

        return view('users.show', compact('user'));
    }
}
