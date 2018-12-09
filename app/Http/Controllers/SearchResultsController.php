<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Author;
use Auth;
use Illuminate\Support\Facades\Input;

class SearchResultsController extends Controller
{
    public function index(Request $request){
        $journals = Journal::orderBy('title','asc')->paginate(10);

        foreach ($journals as $j) {
            $a_array = json_decode($j->author_id);
        }

        $authors = Author::find($a_array);

        
        $user = Auth::user();
        
        return view('search.searchresults',compact('journals','user','authors'));
    }

    public function search(Request $request){
        $user = Auth::user();
        
        if($request->has('search')){  
         $journals = Journal::search($request->input('search'))->get();
        }

       return view('search.results', compact('journals','user'));
    }

}
