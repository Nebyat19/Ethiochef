<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        // Make sure the selected locale is valid
        $validLocales = ['am', 'en', 'om'];
        if (in_array($locale, $validLocales)) {
            // Set the application locale
            App::setLocale($locale);

            // Store the locale in the session
            session(['locale' => $locale]);
        }

        // Redirect back to the previous page
        return back();
    }
}
