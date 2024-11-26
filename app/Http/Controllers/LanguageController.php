<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function swichLocale(Request $request, $locale){
        // if(in_array($locale,['en','fr','sw'])){
        //     return redirect()->back()->withCookie(cookie('app_locale',$locale,60 * 24 * 30)); // 30 days
        // }

        if(in_array($locale,['en','fr','sw'])){
            $request->user()->update([
                'locale' => $locale
            ]);
            return redirect()->back();
        }

        return redirect()->back();
    }
}
