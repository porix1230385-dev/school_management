<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Ho;

class LangController extends Controller
{
    public function setLocale(string $locale)
    {
        //if (!in_array($locale, ['en', 'fr'])) abort(400);
        // Change language
        App::setLocale($locale);
        // Redirection
        return route('dashboard');
    }
}
