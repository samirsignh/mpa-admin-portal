<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'emailId' => 'required|email',
            'password' => 'required|string|min:6|max:12',
            'captcha_code' => ['required', 'string', 'not_regex:/<[^>]*script>/i'],
        ]);

        $emailId = $request->emailId;
        $password = $request->password;
        $captchaImg = str_replace(' ','',$request->captcha_img);

        if($request->captcha_code == $captchaImg){
            if (Auth::attempt(['emailId' => $emailId, 'password' => $password])) {

                $user = Auth::user();
                $userId = $user->id;

                $otp = rand(100000, 999999);
                $expiry = time() + 1 * 60;

                User::where('id', $userId)->update([
                    'otp' => $otp,
                    'otp_expiry' => $expiry,
                ]);

                Mail::to($user->emailId)->send(new OtpMail($otp));

                if ($user->otp) {
                    return redirect()->route('otpVerify')->with('success', 'OTP sent successfully to your registered email address.');
                } else {
                    return redirect()->back()->with('error', 'Failed to generate OTP. Please try again.');
                }
            } else {
                return redirect()->back()->with('error', 'Credentials not matched or User not found!');
            }
        }else{
            return redirect()->back()->with('error', 'Captcha not matched, please enter valid captcha!');
        }
    }

    public function otpVerify()
    {
        return view('verify_user_otp');
    }

    public function resendOtp(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        $otp = rand(100000, 999999);
        $expiry = time() + 1 * 60;

        User::where('id', $userId)->update([
            'otp' => $otp,
            'otp_expiry' => $expiry,
        ]);

        Mail::to($user->emailId)->send(new OtpMail($otp));

        return response()->json(['success' => true, 'message' => 'A new OTP has been sent to your registered email address.']);
    }


    public function validateUserOtp(Request $request)
    {
        $otp = $request->userOtp;
        $user = User::find(Auth::id());
        if($otp == $user->otp)
        {
            if($user->otp_expiry >= time()){
                $user->is_otp_verified = '1';
                $user->update();
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route('dashboard')->with('success', 'Logedin Successfully!');
            }else{
                return redirect()->route('otpVerify')->with('error', 'OTP Expired. Please enter valid otp');
            }
        }else{
            return redirect()->route('otpVerify')->with('error', 'Invalid Otp. Please enter valid otp');
        }
    }

    public function forgetPassword()
    {
        return view('forget_password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}