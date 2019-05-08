<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Auth;

class RegionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('search.regions',compact('user'));
    }
}
