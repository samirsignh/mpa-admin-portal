<?php

namespace App\Http\Controllers;

use App\Models\NoticeAndCircular_model;
use Illuminate\Http\Request;
use App\http\Requests\NoticeValidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class NoticeAndCircularController extends Controller
{
    public function notice_list(Request $request)
    {
        $languageId = $request->input('language_id', 1); 
        $notices = NoticeAndCircular_model::where('language_id', $languageId)->get();
        return view('notice_circulars/notice_circulars_list', compact('notices'));
    }

    public function create_notice(NoticeValidate $request)
    {
        // dd("hi");
        // dd($request->toArray());

        try {
            $notice = new NoticeAndCircular_model();
            // if ($request->hasFile('document')) {
            //     $file = $request->file('document');
            //     $fileName = time() . '_' . $file->getClientOriginalName(); 
            //     $filePath = $file->storeAs('uploads/documents', $fileName, 'public'); 
        
            //     $notice->document = $filePath; 
            // }
            if ($request->hasFile('document')) {
                Log::info('document file found');
                $file = $request->file('document');
                $path = $file->store('logos', 'public');
                Log::info('File stored at path: ' . $path);
                $data['document'] = Storage::url($path);
            } else {
                Log::info('No logo file found');
                $data['document'] = null;
            }
        
            $notice->notice_title = $request->notice_title;
            $notice->language_id = $request->language_id;
            $notice->description = $request->description;
            $notice->notice_date = $request->notice_date;
            $notice->leter_no = $request->leter_no;
            $notice->created_by = Auth::id();
            $notice->updated_by = Auth::id();
            $notice->save();
            return redirect()->route('notice_list')->with('success', 'Created Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('notice_list')->with('error', $e->getMessage());
        }
    }

}
