@extends('layouts.app')

@section('content')

<!-- MODAL FOR PDF DOWNLOAD -->
<form method="post" action="/search2">
	{{ csrf_field() }}
	<div class="modal fade" id="modalRegionalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h4 class="modal-title w-100 font-weight-bold">Which region do you want to search in?</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="container">
	      	<label><input type="radio" name="chooseRegion" value="all_rb"> All</label>
	      	<br><label><input type="radio" name="chooseRegion" value="ncr_rb"> National Capital Region</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r1_rb"> Region I - Ilocos Region</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r2_rb"> Region II - Cagayan Valley</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r3_rb"> Region III - Central Luzon</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r4_rb"> Region IVA & IVB - CALABARZON & MIMAROPA</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r5_rb"> Region V - Bicol Region</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r6_rb"> Region VI - Western Visayas</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r7_rb"> Region VII - Central Visayas</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r8_rb"> Region VIII - Eastern Visayas</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r9_rb"> Region IX - Zamboanga Peninsula</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r10_rb"> Region X - Northern Mindanao</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r11_rb"> Region XI - Davao Region</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r12_rb"> Region XII - SOCCSKSARGEN</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r13_rb"> Region XIII - CARAGA</label>
	      	<br><label><input type="radio" name="chooseRegion" value="r14_rb"> Region XIV - Cordillera Administrative Region</label>
	      </div>
	      <div class="modal-footer d-flex justify-content-center">
	    	<button type="button" class="btn btn-danger" data-dismiss="modal">Go</button>
		  </div>
	    </div>
	    
	  </div>
	</div>
	<!-- ------------------------=---------------------------------------- -->

	<div class="container">
		<center><p style="font-size: 30px; color: black"><strong>SEARCH</strong></p></center>
	</div>

	<div class="row" align="center">
	    <div class="container" align="center" style="margin-left: 250px; margin-bottom: 100px; border-bottom: 30px;">
	    	<!-- CALL PDF MODAL -->
	        <div class="floated_img" style="float: left; padding-right: 100px;">
	          <a href="two" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegionalForm"><img style="width: 300px;" src="{{ asset('assets/img/philippines_logo.png') }}"></a>
	          <center><p style="font-size: 20px; color: black"><strong>Search in all or other regions in the country</strong></p></center>
	        </div>
	        <div class="floated_img" style="float: left; padding-right: 100px;">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 300px;" src="{{ asset('assets/img/regional_logo.png') }}"></div>
	            @auth
	            	<br><label>{{ Form::checkbox('chooseRegion', 'yes', false) }}<center><p style="font-size: 20px; color: black"><strong>Search in {{ $user->branch }}</strong></p></center></label><br>
	                
	            @endauth
	            
	        </div>
	    </div>
	   
	</div>
	<!-- ============================================================================= -->
	<div class="container">
		<center><p style="font-size: 30px; color: black"><strong>Choose subject field/s:</strong></p></center>
	</div>
	<!-- =============================================================================== -->
	<div class="row" align="center">
	    <div class="container" align="center" style="margin-top: 0px; margin-left: 260px;">
	        
	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/general_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('general', 'yes', true) }}<center><p style="font-size: 20px; color: black"><strong>General</strong></p></center></label><br>
	        </div>
	        
	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/aquaculture_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('aquaculture', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Aquaculture</strong></p></center></label><br>
	        </div>
	        
	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/agri_business_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('a_business', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Agricultural Business</strong></p></center></label><br>
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/agri_economics_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('a_econ', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Agricultural Economics</strong></p></center></label><br>
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/agri_equipment_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('a_equipment', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Agricultural Equipment</strong></p></center></label><br>
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/agri_management_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('a_mgt', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Agricultural Management</strong></p></center></label><br>
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/agronomy_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('agronomy', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Agronomy</strong></p></center></label><br>          
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/animal_husbandry_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('animal_husbandry', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Animal Husbandry</strong></p></center></label><br>           
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/crop_production_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('crop_prod', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Crop Production</strong></p></center></label><br>            
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/food_science_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('food_sci', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Food Science</strong></p></center></label><br>           
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/forestry_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('forestry', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Forestry</strong></p></center></label><br>           
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/horticulture_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('horticulture', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Horticulture</strong></p></center></label><br>            
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/soil_science_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('soil_sci', 'yes', false) }} <center><p style="font-size: 20px; color: black"><strong>Soil Science</strong></p></center></label><br>           
	        </div>

	        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
	            <div class="btn btn-default btn-rounded mb-4"><img style="width: 170px;" src="{{ asset('assets/img/veterinary_science_logo.png') }}"></div>
	            <br><label>{{ Form::checkbox('vet_sci', 'yes', false) }}  <center><p style="font-size: 20px; color: black"><strong>Veterinary Science</strong></p></center></label><br>           
	        </div>
	    </div>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <center><a class="btn btn-danger" type="submit">SEARCH</a></center>
</form>
@endsection