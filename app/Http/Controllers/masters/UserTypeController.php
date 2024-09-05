<?php

namespace App\Http\Controllers\masters;

use App\Http\Controllers\Controller;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTypeController extends Controller
{
    public function roleList()
    {
        $data = RoleModel::where('status', 1)->get();
        return view('masters.role.role_list', ['roles' => $data]);
    }

    public function craeteRole(Request $request)
    {
        $request->validate([
            'userType' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:255'],
        ]);
        try {
            $user = new RoleModel;
            $user->role = $request->userType;
            $user->createdBy = Auth::id();
            $user->save();
            return redirect()->route('roleList')->with('success', 'Created Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('roleList')->with('error', $e->getMessage());
        }
    }

    public function editRole($id)
    {
        $role = RoleModel::findOrFail($id);
        return view('masters.role.edit_role',['role'=>$role]);
    }

    public function updateRole(Request $request)
    {
        $request->validate([
            'userType' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:255'],
        ]);
        $sessionId = Auth::id();
        try {
            RoleModel::where(['id' => $request->roleId])->update([
                'role' => $request->userType,
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('roleList')->with('success', 'Updated Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('roleList')->with('error', $e->getMessage());
        }
    }

    public function deleteRole($id)
    {
        $roleId = $id;
        $sesionId = Auth::id();
        try {
            RoleModel::where(['id' => $roleId])->update([
                'status' => 0,
                'updatedBy' => $sesionId,
            ]);
            return redirect()->route('roleList')->with('success', 'Deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('roleList')->with('error', $e->getMessage());
        }
    }
}