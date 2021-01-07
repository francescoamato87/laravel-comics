<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return 'HOMEPAGE';
        // Get comics list
            $comics = config('comics');
            // dd($comics);
        return view('home', compact('comics'));
    }
}
