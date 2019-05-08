<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;

class SearchController extends Controller
{

    public function index(Request $request){
        $user = Auth::user();
        return view('search.sample', compact('user'));
    }

    public function processForm() {
        $user = Auth::user();

        $selected_region  = Input::get('selected_region');

        $selected_field = "";
        if (Input::get('general') == 'yes') {
            $selected_field = "general";
        }
        else{
            if (Input::get('aquaculture') == 'yes') {
                $selected_field= $selected_field.", Aquaculture";
            }
            if (Input::get('a_business') == 'yes') {
                $selected_field= $selected_field.", Business";
            }
            if (Input::get('a_econ') == 'yes') {
                $selected_field= $selected_field.", Economics";
            }
            if (Input::get('a_equipment') == 'yes') {
               $selected_field= $selected_field.", Equipment";
            }
            if (Input::get('a_mgt') == 'yes') {
                $selected_field= $selected_field.", Management";
            }
            if (Input::get('agronomy') == 'yes') {
                $selected_field= $selected_field.", Agronomy";
            }
            if (Input::get('animal_husbandry') == 'yes') {
                $selected_field= $selected_field.", Animal Husbandry";
            }
            if (Input::get('crop_prod') == 'yes') {
                $selected_field= $selected_field.", Crop Production";
            }
            if (Input::get('food_sci') == 'yes') {
                $selected_field= $selected_field.", Food Science";
            }
            if (Input::get('forestry') == 'yes') {
               $selected_field= $selected_field.", Forestry";
            }
            if (Input::get('horticulture') == 'yes') {
                $selected_field= $selected_field.", Horticulture";
            }
            if (Input::get('soil_sci') == 'yes') {
                $selected_field= $selected_field.", Soil Science";
            }
            if (Input::get('vet_sci') == 'yes') {
                $selected_field=$selected_field.", Veterinary Science";
            }
        }

        if($selected_region != "All" && $selected_field != "general"){
            $journals = Journal::search($selected_field)->whereRegexp('office.raw', $selected_region)->get();
        }
        else if($selected_region == "All" && $selected_field != "general"){
            $journals = Journal::search($selected_field)->get();
        }
        else if($selected_region != "All" && $selected_field == "general"){
            $journals = Journal::search('*')->whereRegexp('office.raw', $selected_region)->get();
        }
        else{
            $journals = Journal::search('*')->get();
        }
        // return Redirect::to('search/'.$selected_region.'/'.$selected_field) ;
        return view('search.results', compact('selected_region','selected_field','user', 'journals'));
    }

    public function search(Request $request){
        $user = Auth::user();
        
        if($request->has('search')){  
         $journals = Journal::search($request->input('search'))->paginate(5);
        }

       return view('search.searchresults', compact('journals','user'));
    }

    // public function search_with_constraints(Request $request){
    //     $user = Auth::user();
    //     $main_array = array();

    //     $regionarray = Input::get('chooseRegion');
    //     $selected_region = "";
    //     if($regionarray == 'all_rb'){
    //         $selected_region = "*";
    //     }
    //     else if($regionarray == 'rb1_rb'){
    //         $selected_region = "Region I";
    //     }
    //     else if($regionarray == 'rb2_rb'){
    //         $selected_region = "Region II";
    //     }
    //     else if($regionarray == 'rb3_rb'){
    //         $selected_region = "Region III";
    //     }
    //     else if($regionarray == 'rb4_rb'){
    //         $selected_region = "Region IV";
    //     }
    //     else if($regionarray == 'rb5_rb'){
    //         $selected_region = "Region V";
    //     }
    //     else if($regionarray == 'rb6_rb'){
    //         $selected_region = "Region VI";
    //     }
    //     else if($regionarray == 'rb7_rb'){
    //         $selected_region = "Region VII";
    //     }
    //     else if($regionarray == 'rb8_rb'){
    //         $selected_region = "Region VIII";
    //     }
    //     else if($regionarray == 'rb9_rb'){
    //         $selected_region = "Region IX";
    //     }
    //     else if($regionarray == 'rb10_rb'){
    //         $selected_region = "Region X";
    //     }
    //     else if($regionarray == 'rb11_rb'){
    //         $selected_region = "Region XI";
    //     }
    //     else if($regionarray == 'rb12_rb'){
    //         $selected_region = "Region XII";
    //     }
    //     else if($regionarray == 'rb13_rb'){
    //         $selected_region = "Region XIII";
    //     }
    //     else if($regionarray == 'rb14_rb'){
    //         $selected_region = "Region XIV";
    //     }

    //     if (Input::get('own_region_choice') == 'yes') {
    //         $selected_region = $user->branch;
    //     }

    //     $subfieldarray = array();
    //     if (Input::get('general') == 'yes') {
    //         $subfieldarray = "*";
    //     }
    //     if (Input::get('aquaculture') == 'yes') {
    //         $subfieldarray = "Aquaculture";
    //     }
    //     if (Input::get('a_business') == 'yes') {
    //         $subfieldarray = "Agricultural Business";
    //     }
    //     if (Input::get('a_econ') == 'yes') {
    //         $subfieldarray = "Agricultural Economics";
    //     }
    //     if (Input::get('a_equipment') == 'yes') {
    //        $subfieldarray = "Agricultural Equipment";
    //     }
    //     if (Input::get('a_mgt') == 'yes') {
    //         $subfieldarray = "Agricultural Management";
    //     }
    //     if (Input::get('agronomy') == 'yes') {
    //         $subfieldarray = "Agronomy";
    //     }
    //     if (Input::get('animal_husbandry') == 'yes') {
    //         $subfieldarray = "Animal Husbandry";
    //     }
    //     if (Input::get('crop_prod') == 'yes') {
    //         $subfieldarray = "Crop Production";
    //     }
    //     if (Input::get('food_sci') == 'yes') {
    //         $subfieldarray = "Food Science";
    //     }
    //     if (Input::get('forestry') == 'yes') {
    //        $subfieldarray = "Forestry";
    //     }
    //     if (Input::get('horticulture') == 'yes') {
    //         $subfieldarray = "Horticulture";
    //     }
    //     if (Input::get('aquaculture') == 'yes') {
    //         $subfieldarray = "Soil Science";
    //     }
    //     if (Input::get('soil_sci') == 'yes') {
    //         $subfieldarray = "Veterinary Science";
    //     }

    //     $main_array = $selected_region;
    //     $main_array = $subfieldarray;

    //     return view('search.index', compact('user','main_array'));
    // }

 //    public function search_next(Request $request){
 //    	$user = Auth::user();
		
	// 	// if($request->has('search')){  
	//  //    	$journals = Journal::search($request->input('search'))->get();
	// 	// }
 //        if($main_array[0] != "*" && $main_array[1] != "*"){
 //            $journals = Journal::search($request->input('*'))->where('office',$main_array[0])->whereExists($main_array[1])->get();
 //        }
 //        else if($main_array[0] == "*" && $main_array[1] != "*"){
 //            $journals = Journal::search($request->input('*'))->whereExists($main_array[1])->get();
 //        }
 //        else if($main_array[0] != "*" && $main_array[1] == "*"){
 //            $journals = Journal::search($request->input('*'))->where('office',$main_array[0])->get();
 //        }
 //        else{
 //            $journals = Journal::search("*")->get();
 //        }

	//    return view('search.results', compact('journals','user'));
	// }

     


}
