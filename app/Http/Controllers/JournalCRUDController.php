<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Journal;
use App\Author;
use App\Subject;
use Illuminate\Pagination\Paginator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Smalot\PdfParser\Parser;

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
        $journals = DB::table('journals')->paginate(10);


        $user = Auth::user();
        $journal_subject = DB::table('journal_subject')->get();
        $subjects = Subject::orderBy('field','asc')->get();
        return view('journalCRUD.index',compact('journals','user','subjects','journal_subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        $journal = Journal::get();
        $subjects = Subject::orderBy('field','asc')->get();

        return view('journalCRUD.create',compact('journal','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temp_string = "";
        $user = Auth::user();

        $subject_fields = $request->subject_checked; 

        foreach ($subject_fields as $subject_field_id) {
            $currentId = Journal::orderBy('id', 'desc')->first()->id + 1;
            DB::insert('insert into journal_subject values(?,?,?)', [NULL,$currentId,$subject_field_id]);

            $temp = Subject::where('id',$subject_field_id)->first();
            $temp_string =$temp_string.$temp->field." ";
        }

        $text = "";
        
        if(file_exists($request->pdf_url)){
            $PDFParser = new Parser();
            $pdf = $PDFParser->parseFile($request->pdf_url);
            $text = $pdf->getText();
        }
        else{
            $text = "FILE DOES NOT EXIST!";
        }

        $this->validate($request, [
        	'title' => 'required|max:255',
            'author' => 'required',
            'pdf_url' => 'required',
            'date' => 'required',
            'abstract' => 'required',
        ]);

        $request->merge([
            'subject_txt' => $temp_string,
            'office' => $user->branch,
            'data' =>$text,
        ]);

        Journal::create($request->all());
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
        $journal = Journal::find($id);
        $journal_subject = DB::table('journal_subject')->get();
        return view('journalCRUD.show',compact('journal','journal_subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal = Journal::find($id);
        $subjects = Subject::orderBy('field','asc')->get();
        return view('journalCRUD.edit',compact('journal','subjects'));
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
        $temp_string = "";
        DB::table('journal_subject')->where('journal_id',$id)->delete();

        $subject_fields = $request->subject_checked;
        
        foreach ($subject_fields as $subject_field_id) {
           DB::insert('insert into journal_subject values(?,?,?)', [NULL,$id,$subject_field_id]);

           $temp = Subject::where('id',$subject_field_id)->first();
            $temp_string =$temp_string.$temp->field." ";
        }

        $this->validate($request, [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'date' => 'required',
            'abstract' => 'max:2000',
        ]);

        $request->merge([
            'subject_txt' => $temp_string
        ]);

        Journal::find($id)->update($request->all());
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
        Journal::find($id)->delete();
        return redirect()->route('journalCRUD.index')
                        ->with('success','Journal deleted successfully');
    }

    // public function getJournals(){
    //     $journals = Journal::where('id', '=', $id)
    //                         ->with('subjects')
    //                         ->first();
    //     return response()->json( $cafes );
    // }


}
