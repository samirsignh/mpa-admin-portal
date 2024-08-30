<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $emailId = $request->emailId;
        $password = $request->password;

        if(Auth::attempt(['emailId' => $emailId, 'password' => $password])){
            $request->session()->regenerate();
            return redirect('verify_otp')->with('success', 'Otp sent successfully to your registerd email address.');
        }else{
            return redirect()->back()->with('error', 'User not found or Credentials not matched!');
        }
    }

    public function verify_otp()
    {
        if(Auth::user()){
            return view('otp_view');
        }else{
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}