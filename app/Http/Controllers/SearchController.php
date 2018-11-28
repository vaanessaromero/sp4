<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;


class SearchController extends Controller
{
    //
    public function search(Request $request){
	   if($request->has('search')){
	      
	      $journals = Journal::search($request->input('search'))->get();
	   }
	   return view('search.results', compact('journals'));
	}
}
