<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;  // <-- utility SLUG




class HomeController extends Controller
{
    public function index()
    {
        // return 'HOMEPAGE';
        // Get comics list
            $comics = config('comics');
            // dd($comics);

            // Gen slug FRIENDLY URL (creiamo un URL più semplice e parlante)

            // HOW?
            // $slug = Str::slug('Ciao Classe 19', '-');
            // dd($slug);

            foreach($comics as $key => $comic) {
                // a. titolo -> slug
                 $slug = Str::slug($comic['title'], '-');
                //                  dump($slug);
                //  ADD slug
                $comics[$key]['slug'] = $slug;   // <-----------poi vai a modificare l'ID nell'home.blade.php e ci metti lo SLUG
            }
            // dd($comics);

            return view('home', compact('comics'));
    }
}
