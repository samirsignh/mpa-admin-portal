<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        return view('user.user_list');
    }
}
