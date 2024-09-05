<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class LanguageController extends Controller
{
    public function switchLanguage($lang)
    {
        if (in_array($lang, ['en', 'hi'])) {
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
}

