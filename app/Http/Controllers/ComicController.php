<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;  // <-- utility SLUG

class ComicController extends Controller
{
    // DETAIL PAGE FOR A COMIC ITEM

    public function show($slug)
    // public function show($id)
        {
        // return 'DETAIL PAGE FOR ID: ' . $id;

        $comics = config('comics');
        // dd($comics);

            // QUESTA è UNA REGOLA CHE POTRA' SERVIRE SEMPRE M E M O R I Z Z A R E


// METODO A.

        // GET specif comic by ID

        // $comic = [];
        // foreach ($comics as $item) {
        //     if($id == $item['id']) {
        //         $comic = $item;
        //     }
        // }

//    METODO B. C O L L E C T I O N S metodo conveniente per lavorare su Arrays
        // dd($comic);
        //  $comic = collect($comics)->firstWhere('id', $id);
        //     // dd($comic);

        // GET specific comic by SLUG
        $comic = [];
        foreach ($comics as $item){
            // title -> slug
            $titleConverted = Str::slug($item['title'], '-');

                if($slug == $titleConverted){
                   $comic = $item;
                   break;
            }
        }

        if(empty($comic)) {  // <-- funzione per cercare se cè contenuto o no nell'Array
            abort(404);
            // -----> E R R O R E  4 0 4
        }

            return view('comics.show', compact('comic'));
    }
}
