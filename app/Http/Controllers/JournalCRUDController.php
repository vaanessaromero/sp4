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
        $journals = Journal::orderBy('title','asc')->paginate(10);

        foreach ($journals as $j) {
            $a_array = json_decode($j->author_id);
            $s_array = json_decode($j->subject_id);
        }

        $authors = Author::find($a_array);
        $subjects = Subject::find($s_array);
        $user = Auth::user();
        
        return view('journalCRUD.index',compact('journals','user','authors','subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $journal = Journal::get();
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
        // $temp_string = "";
        $user = Auth::user();

        // if (Input::get('aquaculture') == 'yes') {
        //     $temp_string =  $temp_string.", Aquaculture";
        // }
        // if (Input::get('a_business') == 'yes') {
        //     $temp_string =  $temp_string.", Agricultural Business";
        // }
        // if (Input::get('a_econ') == 'yes') {
        //     $temp_string =  $temp_string.", Agricultural Economics";
        // }
        // if (Input::get('a_equipment') == 'yes') {
        //     $temp_string =  $temp_string.", Agricultural Equipment";
        // }
        // if (Input::get('a_mgt') == 'yes') {
        //     $temp_string =  $temp_string.", Agricultural Management";
        // }
        // if (Input::get('agronomy') == 'yes') {
        //     $temp_string =  $temp_string.", Agronomy";
        // }
        // if (Input::get('animal_husbandry') == 'yes') {
        //     $temp_string =  $temp_string.", Animal Husbandry";
        // }
        // if (Input::get('crop_prod') == 'yes') {
        //     $temp_string =  $temp_string.", Crop Production";
        // }
        // if (Input::get('food_sci') == 'yes') {
        //     $temp_string =  $temp_string.", Food Science";
        // }
        // if (Input::get('forestry') == 'yes') {
        //     $temp_string =  $temp_string.", Forestry";
        // }
        // if (Input::get('horticulture') == 'yes') {
        //     $temp_string =  $temp_string.", Horticulture";
        // }
        // if (Input::get('soil_sci') == 'yes') {
        //     $temp_string =  $temp_string.", Soil Science";
        // }
        // if (Input::get('vet_sci') == 'yes') {
        //     $temp_string =  $temp_string.", Veterinary Science";
        // }

        $this->validate($request, [
        	'title' => 'required|max:255',
            'date' => 'required',
            'abstract' => 'max:2000',
            'pdf_url' => 'required',
        ]);

        $request->merge([
            'subject_field' => $temp_string,
            'office' => $user->branch,
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
        $journal = Journal::find($id);
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
        $temp_string = "";
        if (Input::get('aquaculture') == 'yes') {
            $temp_string =  $temp_string.", Aquaculture";
        }
        if (Input::get('a_business') == 'yes') {
            $temp_string =  $temp_string.", Agricultural Business";
        }
        if (Input::get('a_econ') == 'yes') {
            $temp_string =  $temp_string.", Agricultural Economics";
        }
        if (Input::get('a_equipment') == 'yes') {
            $temp_string =  $temp_string.", Agricultural Equipment";
        }
        if (Input::get('a_mgt') == 'yes') {
            $temp_string =  $temp_string.", Agricultural Management";
        }
        if (Input::get('agronomy') == 'yes') {
            $temp_string =  $temp_string.", Agronomy";
        }
        if (Input::get('animal_husbandry') == 'yes') {
            $temp_string =  $temp_string.", Animal Husbandry";
        }
        if (Input::get('crop_prod') == 'yes') {
            $temp_string =  $temp_string.", Crop Production";
        }
        if (Input::get('food_sci') == 'yes') {
            $temp_string =  $temp_string.", Food Science";
        }
        if (Input::get('forestry') == 'yes') {
            $temp_string =  $temp_string.", Forestry";
        }
        if (Input::get('horticulture') == 'yes') {
            $temp_string =  $temp_string.", Horticulture";
        }
        if (Input::get('soil_sci') == 'yes') {
            $temp_string =  $temp_string.", Soil Science";
        }
        if (Input::get('vet_sci') == 'yes') {
            $temp_string =  $temp_string.", Veterinary Science";
        }

        $this->validate($request, [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'date' => 'required',
            'abstract' => 'max:2000',
        ]);

        $request->merge([
            'subject_field' => $temp_string,
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


}
