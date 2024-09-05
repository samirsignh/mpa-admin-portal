<?php

namespace App\Http\Controllers\masters;

use App\Http\Controllers\Controller;
use App\Models\SarodModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SarodController extends Controller
{
    public function sarodList()
    {
        $data = SarodModel::where('status',1)->get();
        return view('masters.sarod.sarod_list',['sarod_lists' => $data]);
    }

    public function uploadSarodFile(Request $request)
    {
        $request->validate([
            'title' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'max:255'],
            'sarod_document' => ['required', 'mimes:pdf'],
        ]);

        $file = $request->file('sarod_document');
        $file_name = null;

        if ($file) {
            $file_name = time() . rand(100000, 999999) . $file->getClientOriginalName();
            $file->move('sarod-document/', $file_name);
            $file_name = "sarod-document/" . $file_name;
        }

        try {
            $data = new SarodModel();
            $data->title = $request->title;
            $data->sarod_document = $file_name;
            $data->createdBy = Auth::id();
            $data->save();
            return redirect()->route('sarodList')->with('success', 'Successfully Uploaded.');
        } catch (\Exception $e) {
            return redirect()->route('sarodList')->with('error', $e->getMessage());
        }
    }

    public function editSarod($id)
    {
        $data = SarodModel::findOrFail($id);
        return view('masters.sarod.edit_sarod',['details' => $data]);
    }

    public function updateSarod(Request $request)
    {
        $request->validate([
            'title' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'max:255'],
            'sarod_document' => ['required', 'mimes:pdf'],
        ]);

        $file = $request->file('sarod_document');
        $file_name = null;

        if ($file) {
            $file_name = time() . rand(100000, 999999) . $file->getClientOriginalName();
            $file->move('sarod-document/', $file_name);
            $file_name = "sarod-document/" . $file_name;
        }
        $sessionId = Auth::id();
        try {
            SarodModel::where(['id' => $request->sarodId])->update([
                'title' => $request->title,
                'sarod_document' => $file_name,
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('sarodList')->with('success', 'Successfully Updated.');
        } catch (\Exception $e) {
            return redirect()->route('sarodList')->with('error', $e->getMessage());
        }
    }

    public function deleteSarod($id)
    {
        $sessionId = Auth::id();
        try {
            SarodModel::where(['id' => $id])->update([
                'status' => 0,
                'updatedBy' => $sessionId,
            ]);
            return redirect()->route('sarodList')->with('success', 'Deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('sarodList')->with('error', $e->getMessage());
        }
    }
}