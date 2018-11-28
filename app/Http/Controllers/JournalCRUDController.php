<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Journals;
use Illuminate\Pagination\Paginator;


class JournalCRUDController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $journals = Journals::orderBy('branch','asc')->paginate(10);
        return view('journalCRUD.index',compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $journal = Journals::get();
        return view('journalCRUD.create',compact('journal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
        	'title' => 'required|max:255',
            'author' => 'required|max:255',
            'date' => 'required',
            'abstract' => 'max:500',
            'branch' => 'required',
        ]);

        

        Journals::create($request->all());
        return redirect()->route('journalCRUD.index')
                        ->with('success','Journal created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $journal = Journals::find($id);
        return view('journalCRUD.show',compact('journal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal = Journals::find($id);
        return view('journalCRUD.edit',compact('journal'));
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
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'date' => 'required',
            'abstract' => 'max:500',
            'branch' => 'required',
        ]);

        Journals::find($id)->update($request->all());
        return redirect()->route('journalCRUD.index')
                        ->with('success','Journal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Journals::find($id)->delete();
        return redirect()->route('journalCRUD.index')
                        ->with('success','Journal deleted successfully');
    }


}
