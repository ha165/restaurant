<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.pages.users.users',compact('users'));
    }
    public function create()
    {
        return view('admin.pages.users.adduser');
    }

}
