<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Author;
use App\Subject;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class SearchResultsController extends Controller
{
    public function index(Request $request){
        $journals = Journal::search('*')->orderBy('title','asc')->paginate(5);
        $user = Auth::user();
        
        return view('search.searchresults',compact('journals','user'));
    }

    public function search(Request $request){
        $user = Auth::user();
        
        if($request->has('search')){  
         $journals = Journal::search($request->input('search'))->get();
        }

       return view('search.results', compact('journals','user'));
    }

    public function all_author_result(Request $request,$author_id){
        $user = Auth::user();
        
        $journals = Journal::where($author_id,'author_id')->get();

        return view('search.searchresults',compact('journals','user'));
    }

    public function all_subject_result(Request $request,$field){
        $user = Auth::user();
        // $jss = DB::table('journal_subject')->where('subject_id',$subject_id)->get();
        
        // foreach($jss as $js=>$j){
        //     $journals = Journal::search('*')->where('id',$j->journal_id)->first();
        // }
        $journals = Journal::search($field)->paginate(5);

        return view('search.searchresults',compact('journals','user'));
    }

    public function all_region_result(Request $request,$region){
        $user = Auth::user();

        $journals = Journal::search($region)->paginate(5);

        return view('search.searchresults',compact('journals','user'));
    }

    // public function hehe(Request $request,$region){
    //     $user = Auth::user();

    //     $journals = Journal::search($region)->paginate(5);

    //     return view('search.regionsresult',compact('journals','user'));
    // }

    public function searchbyauthor(Request $request){

        $user = Auth::user();
        
        if($request->has('author_search')){  
         $journals = Journal::search($request->input('author_search'))->whereRegexp('author.raw', $request->input('author_search'))->paginate(5);
        }

       return view('search.searchresults', compact('journals','user'));
    }

    public function searchbykeyword(Request $request){

        if($request->has('keyword_search')){  
         $journals = Journal::search($request->input('keyword_search'))->paginate(5);
        }

        // $authors = Author::find($a_array);
        
        $user = Auth::user();
        
        return view('search.searchresults',compact('journals','user','authors'));
    }

    public function searchbytitle(Request $request){

        if($request->has('title_search')){  
         $journals = Journal::search('*')->whereRegexp('title.raw', $request->input('title_search'))->paginate(5);
        }

        // $authors = Author::find($a_array);
        
        $user = Auth::user();
        
        return view('search.searchresults',compact('journals','user','authors'));
    }

    public function searchbysubject(Request $request){

        $journals = Journal::search($request->input('subject_search'))->whereRegexp('subject.raw', $request->input('subject_search'))->paginate(5);
        
        $user = Auth::user();
        
        return view('search.searchresults',compact('journals','user','subjects'));
    }

}
