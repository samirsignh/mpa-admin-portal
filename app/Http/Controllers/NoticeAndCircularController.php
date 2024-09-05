<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
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

=======
use Illuminate\Http\Request;
use App\Models\NoticeAndCircular;
use App\Models\NoticeAndCircularTranslationDetail;
use App\http\Requests\UserValidate;
class NoticeAndCircularController extends Controller
{
    public function create()
    {
        return view('notice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'circular_translation_id' => 'required|exists:tbl_notice_and_circular_translation_details,id',
            'created_by' => 'required|integer',
            
        ]);

        $notice = NoticeAndCircular::create($request->all());
        
        foreach ($request->translations as $translation) {
            NoticeAndCircularTranslationDetail::create([
                'circular_translation_id' => $notice->id,
                'language_id' => $translation['language_id'],
                'leter_no' => $translation['leter_no'],
                'notice_title' => $translation['notice_title'],
                'document' => $translation['document'],
                'description' => $translation['description'],
                'notice_date' => $translation['notice_date'],
                'status' => $translation['status'],
            ]);
        }

        return redirect()->back()->with('success', 'Notice created successfully!');
    }

    public function edit($id)
    {
        $notice = NoticeAndCircular::with('translationDetails')->findOrFail($id);
        return view('notice.edit', compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'circular_translation_id' => 'required|exists:tbl_notice_and_circular_translation_details,id',
            'updated_by' => 'required|integer',
            // Add validation for other fields as needed
        ]);

        $notice = NoticeAndCircular::findOrFail($id);
        $notice->update($request->all());

        // Update translation details as well...

        return redirect()->back()->with('success', 'Notice updated successfully!');
    }

    public function destroy($id)
    {
        $notice = NoticeAndCircular::findOrFail($id);
        $notice->delete();

        return redirect()->back()->with('success', 'Notice deleted successfully!');
    }
>>>>>>> Stashed changes
}
