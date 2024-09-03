<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Controller
{
    public function dashboard()
    {
        // return redirect()->route('dashboard');
        return view('dashboard');
    }
}