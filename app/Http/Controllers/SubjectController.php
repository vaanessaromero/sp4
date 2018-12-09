<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Journals;
use App\Subject;
use Illuminate\Pagination\Paginator;
use Auth;
use Illuminate\Support\Facades\Input;

class SubjectController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subjects = Subject::orderBy('field','asc')->paginate(10);
        $user = Auth::user();
        return view('search.subjects',compact('subjects','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $subject = Subject::get();
        return view('journalCRUD.create',compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $temp_string = "";
        $user = Auth::user();

        $this->validate($request, [
            'first_name' => 'max:50',
            'last_name' => 'max:50'
        ]);

        Subject::create($request->all());
        return redirect()->route('journalCRUD.index')
                        ->with('success','subject created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('subjectCRUD.show',compact('subject'));
    }
}