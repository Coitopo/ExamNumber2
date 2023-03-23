<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\poke;    
class pokeController extends Controller
{
        public function index(){
        $page_title = "Pokemons";

        // select * from superheros
        $pokemon = poke::all();

      

        return view('Allpoke', compact('page_title', 'pokemon'));
    }

    public function bel(){
        $page_title = "Pokemons Below 80";

        
        $pokemon = poke::all();

    
        $below = poke::where('hp', '<=', '80')->get();

        return view('Below80', compact('page_title', 'pokemon', 'below'));
    }
    public function above(){
        $page_title = "Pokemons above 80";

        
        $pokemon = poke::all();

    
        $above = poke::where('hp', '>', '80')->get();

        return view('above', compact('page_title', 'pokemon', 'above'));
    }
}
