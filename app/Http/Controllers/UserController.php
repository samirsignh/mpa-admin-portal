<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Hash;
use App\http\Requests\UserValidate;
use Illuminate\Support\Facades\Auth;

>>>>>>> Stashed changes

class UserController extends Controller
{
    public function userList()
    {
<<<<<<< Updated upstream
        return view('user.user_list');
=======
        $users = UserModel::whereIn('userType', [2, 3])
            ->where('isActive', 1)
            ->get();
        return view('user_view',compact('users'));
    }

    public function create_user(UserValidate $request)
    {
        $checkexistingUser = UserModel::where('mobileNo', $request->mobileNo)->first();
       
        if ($checkexistingUser) {
            return redirect()->route('user.list')->with("error",  __('messages.mobile_exists'));
        }

        $userId = Auth::user();

        $user = new UserModel();
        $user->name = $request->name;
        $user->emailId = $request->emailId;
        $user->mobileNo = $request->mobileNo;
        $user->password = Hash::make($request->password);
        $user->userType = $request->userType;
        $user->isActive = 1;
        $user->createdBy =  $userId->id;
        // dd($user->toArray());
        $user->save();
        return redirect()->route('user.list')->with("success", __('messages.user_added_successfully'));
    }

    public function edit_user($id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.list')->with("error", __('messages.user_not_found'));
        }
        return view('edit_user_modal', compact('user'));
    }
    
    public function update_user(Request $request, $id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.list')->with("error", __('messages.user_not_found'));
        }
    
        // Add your validation here
    
        $user->name = $request->name;
        $user->emailId = $request->emailId;
        $user->mobileNo = $request->mobileNo;
        $user->userType = $request->userType;
        $user->save();
    
        return redirect()->route('user.list')->with("success", __('messages.user_updated_successfully'));
    }
    
    public function delete_user($id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.list')->with("error", __('messages.user_not_found'));
        }
    
        $user->isActive = 0;
        $user->updated_at = now(); 
        $user->updatedBy = session('user.id'); 
        $user->save(); 
    
        return redirect()->route('user.list')->with("success", __('messages.user_deleted_successfully'));
>>>>>>> Stashed changes
    }
}
