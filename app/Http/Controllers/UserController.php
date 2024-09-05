<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidate;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Hash;
use App\http\Requests\UserValidate;
use Illuminate\Support\Facades\Auth;

>>>>>>> Stashed changes
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
>>>>>>> baf6df8d2a18c3d611ca48005d8233753d8d12b3

class UserController extends Controller
{
    public function userList()
    {
<<<<<<< HEAD
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
=======
        $role = RoleModel::where('status',1)->get();
        $user = User::whereIn('userType',[2,3])
        ->where('isActive',1)->get();
        return view('user.user_list',['users'=>$user,'roles' => $role]);
>>>>>>> baf6df8d2a18c3d611ca48005d8233753d8d12b3
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