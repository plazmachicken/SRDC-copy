<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale(Request $request)
    {
        // Set the locale to the requested language (e.g., 'en' or 'ms')
        $locale = $request->input('locale');

        // Store the locale in the session
        Session::put('locale', $locale);

        // Set the application locale
        App::setLocale($locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
