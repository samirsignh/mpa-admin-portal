<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\http\Requests\UserValidate;

class UserController extends Controller
{
    public function user_list()
    {
        $users = UserModel::whereIn('userType', [2, 3])
            ->where('isActive', 1)
            ->get();
        return view('user_view',compact('users'));
    }

    public function create_user(UserValidate $request)
    {
        $checkexistingUser = UserModel::where('mobileNo', $request->mobileNo)->first();
        // dd($checkexistingUser->toArray());
        if ($checkexistingUser) {
            return redirect()->route('user.list')->with("error", "Mobile number already exists");
        }

        $user = new UserModel();
        $user->name = $request->name;
        $user->emailId = $request->emailId;
        $user->mobileNo = $request->mobileNo;
        $user->password = Hash::make($request->password);
        $user->userType = $request->userType;
        $user->isActive = 1;
        $user->createdBy = session('user.id');
        $user->save();
        return redirect()->route('user.list')->with("success", "User Added Successfully");
    }
}
