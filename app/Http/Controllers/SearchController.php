<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use Auth;

class SearchController extends Controller
{

    //
    // public function index(Request $request)
    // {
    // 	$pinaka_journal = null;

    // 	if(blabla pressed search in specific){
    // 		$journals = Journal::search($request->input('*'))->where('office','selected_area')->get();
    // 	}
    // 	else{
    // 		$journals = Journal::search($request->input('*'))->get();
    // 	}

    // 	if(author nilagyan){
    // 		$journals = Journal::search($request->input('*'))where('author','search_author')->get();
    // 	}
    // 	elseif(title nilagyan){
    // 		$journals = Journal::search($request->input('se'))where('title','search_author')->get();
    // 	}

    //     return view('search.home', compact('journals'));
    // }

    public function search(Request $request){
    	$user = Auth::user();
		
		if($request->has('search')){  
	    	$journals = Journal::search($request->input('search'))->get();
		}
	   return view('search.results', compact('journals','user'));
	}


}
