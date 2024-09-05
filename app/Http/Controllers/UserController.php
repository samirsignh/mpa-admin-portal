<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidate;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userList()
    {
        $role = RoleModel::where('status',1)->get();
        $user = User::whereIn('userType',[2,3])
        ->where('isActive',1)->get();
        return view('user.user_list',['users'=>$user,'roles' => $role]);
    }

    public function createUser(UserValidate $request)
    {
        $verifyMobile = User::where(['mobileNo' => $request->mobileNo])->first();
        if($verifyMobile){
            return redirect()->route('userList')->with("error", "Mobile number already exists");
        }

        try {
            $user = new User;
            $user->name = $request->input('name', TRUE);
            $user->emailId  = $request->input('emailId', TRUE);;
            $user->mobileNo  = $request->input('mobileNo', TRUE);;
            $user->password  = Hash::make($request->input('password', TRUE));
            $user->userType  = $request->input('userType', TRUE);;
            $user->isActive  = 1;
            $user->createdBy = Auth::id();
            $user->save();
            return redirect()->route('userList')->with('success', 'Created Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('userList')->with('error', $e->getMessage());
        }
    }

    public function editUser($id)
    {
        $role = RoleModel::where('status', 1)->get();
        $user = User::findOrFail($id);
        return view('user.edit_user',['roles' => $role, 'users' => $user]);
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => ['required','regex:/^[a-zA-Z\s]+$/','max:255'],
            'userType' => ['required','regex:/^[0-9]+$/','max:255'],
            'mobileNo' => 'required|integer|digits:10',
            'emailId' => 'required|email',
        ]);
        $sessionId = Auth::id();
        try {
            User::where(['id' =>$request->input('userId',TRUE)])->update([
                'name' => $request->input('name',TRUE),
                'userType' => $request->input('userType', TRUE),
                'mobileNo' => $request->input('mobileNo', TRUE),
                'emailId' => $request->input('emailId', TRUE),
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('userList')->with('success', 'Updated Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('userList')->with('error', $e->getMessage());
        }
    }

    public function deleteUser($id)
    {
        $sessionId = Auth::id();
        try {
            User::where(['id' => $id])->update([
                'isActive' => 0,
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('userList')->with('success', 'Deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('userList')->with('error', $e->getMessage());
        }
    }
}