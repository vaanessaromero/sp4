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
        // return view('search.subjects','subjectCRUD.index',compact('subjects','user'));
        return view('subjectCRUD.index',compact('subjects','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::get();
        return view('subjectCRUD.index',compact('subject'));
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
            'field' => 'max:50'
        ]);

        Subject::create($request->all());
        return redirect()->route('subjectCRUD.index')
                        ->with('success','Subject created successfully');
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
        return view('subjectCRUD.index',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjectCRUD.index',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'field' => 'max:50',
        ]);

        Subject::find($id)->update($request->all());
        return redirect()->route('subjectCRUD.index')
                        ->with('success','Subject Field updated successfully!');
    }

    public function destroy($id)
    {
        Subject::find($id)->delete();
        return redirect()->route('subjectCRUD.index')
                        ->with('success','Subject field deleted successfully!');
    }

    public function viewAll(Request $request)
    {
        $subjects = Subject::orderBy('field','asc')->get();
        $user = Auth::user();
        return view('search.subjects',compact('subjects','user'));
    }
}