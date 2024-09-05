<?php

namespace App\Http\Controllers\masters;

use App\Http\Controllers\Controller;
use App\Models\ArbitrationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArbitrationController extends Controller
{
    public function arbitrationList()
    {
        $data = ArbitrationModel::where('status',1)->get();
        return view('masters.arbitration.arbitration_list',['datas' => $data]);
    }

    public function uploadArbitration(Request $request)
    {
        $request->validate([
            'title' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'max:255'],
            'iac_document' => ['required', 'mimes:pdf'],
        ]);

        $file = $request->file('iac_document');
        $file_name = null;

        if ($file) {
            $file_name = time() . rand(100000, 999999) . $file->getClientOriginalName();
            $file->move('arbitration-document/', $file_name);
            $file_name = "arbitration-document/" . $file_name;
        }

        try {
            $data = new ArbitrationModel();
            $data->title = $request->title;
            $data->iac_document = $file_name;
            $data->createdBy = Auth::id();
            $data->save();
            return redirect()->route('arbitrationList')->with('success', 'Successfully Uploaded.');
        } catch (\Exception $e) {
            return redirect()->route('arbitrationList')->with('error', $e->getMessage());
        }
    }

    public function editArbitration($id)
    {
        $detail = ArbitrationModel::findOrFail($id);
        return view('masters.arbitration.edit_arbitration',['details' => $detail]);
    }

    public function updateArbitration(Request $request)
    {
        $request->validate([
            'title' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'max:255'],
            'iac_document' => ['required', 'mimes:pdf'],
        ]);

        $file = $request->file('iac_document');
        $file_name = null;

        if ($file) {
            $file_name = time() . rand(100000, 999999) . $file->getClientOriginalName();
            $file->move('arbitration-document/', $file_name);
            $file_name = "arbitration-document/" . $file_name;
        }

        $sessionId = Auth::id();

        try {
            ArbitrationModel::where(['id' => $request->id])->update([
                'title' => $request->title,
                'iac_document' => $file_name,
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('arbitrationList')->with('success', 'Updated Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('arbitrationList')->with('error', $e->getMessage());
        }
    }

    public function deleteArbitration($id)
    {
        $sessionId = Auth::id();
        try {
            ArbitrationModel::where((['id' => $id]))->update([
                'status' => 0,
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('arbitrationList')->with('success', 'Deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('arbitrationList')->with('error', $e->getMessage());
        }
    }
}