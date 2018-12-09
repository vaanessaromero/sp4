<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Journals;
use App\Authors;
use Illuminate\Pagination\Paginator;
use Auth;
use Illuminate\Support\Facades\Input;

class AuthorCRUDController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $authors = Authors::orderBy('last_name','asc')->paginate(10);
        $user = Auth::user();
        return view('search.authors',compact('authors','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $author = Authors::get();
        return view('journalCRUD.create',compact('author'));
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

        Authors::create($request->all());
        return redirect()->route('journalCRUD.index')
                        ->with('success','author created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Authors::find($id);
        return view('authorCRUD.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Authors::find($id);
        return view('authorCRUD.edit',compact('author'));
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
            'first_name' => 'max:50',
            'last_name' => 'max:50'
        ]);

        Authors::find($id)->update($request->all());
        return redirect()->route('authorCRUD.index')
                        ->with('success','author updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Authors::find($id)->delete();
        return redirect()->route('authorCRUD.index')
                        ->with('success','author deleted successfully');
    }


}
