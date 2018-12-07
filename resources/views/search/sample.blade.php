@extends('layouts.app')

<style>
    p {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    label {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>

@section('content')


<div class="container">
    <!-- <div class="row" >
        <div class="top-left">
            @auth
                @if ($user->access_level == 0)
                    <a class="btn btn-danger" href="{{ url('/admin/home') }}">Back</a>
                
                @else
                    <a class="btn btn-danger" href="{{ url('/home') }}">Back</a>
                @endif
            @else
                <a class="btn btn-danger" href="{{ url('/') }}">Back to home</a>
            @endauth
        </div>
    </div> -->
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2" > -->

            <div class="panel panel-default">

                <div class="container">
                    <div class="panel-heading">
                        <br>
                        <center><p style="font-size: 22px;"><strong>SEARCH</strong></p></center>
                    </div>

                    <div class="panel-body">
                        <form method="post" action="{{url('search')}}">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <div class="container">
                                        <center><p style="color: #636b6f; padding: 0 25px; font-size: 12px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;">Select region/s:</p></center>
                                    </div>

                                    <div class="container" style="margin-left: 465px;">
                                        <div class="row">
                                            {!! Form::select('selected_region', array('All' => 'All', 'National Capital Region' => 'National Capital Region','Region I' => 'Region I', 'Region II' => 'Region II', 'Region III' => 'Region III', 'Region IV' => 'Region IV', 'Region V' => 'Region V', 'Region VI' => 'Region VI', 'Region VII' => 'Region VII', 'Region VIII' => 'Region VIII', 'Region IX' => 'Region IX', 'Region X' => 'Region X', 'Region XI' => 'Region XI', 'Region XII' => 'Region XII', 'Region XIII' => 'Region XIII', 'Region XIV' => 'Region XIV')) !!}
                                        </div>
                                    </div>
                                    <br><br>


                                    <!-- <div class="row" > -->
                                        <div class="container" style="margin-left: 0px;">
                                            <hr>
                                            <center><p>Select subject field/s:</p></center>
                                            <div class="form-group">
                                             
                                            <div class="row" align="center">
                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 20px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/general_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('general', 'yes', true) }}<center><p><strong>General</strong></p></center></label><br>
                                                    </div>
                                                </div>
                                            
                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 20px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/aquaculture_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('aquaculture', 'yes', false) }} <center><p><strong>Aquaculture</strong></p></center></label><br>
                                                    </div>
                                                </div>
                                            
                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 20px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/agri_business_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('a_business', 'yes', false) }} <center><p><strong>Agricultural Business</strong></p></center></label><br>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 20px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/agri_economics_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('a_econ', 'yes', false) }} <center><p><strong>Agricultural Economics</strong></p></center></label><br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" align="center">

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/agri_equipment_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('a_equipment', 'yes', false) }} <center><p><strong>Agricultural Equipment</strong></p></center></label><br>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/agri_management_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('a_mgt', 'yes', false) }} <center><p><strong>Agricultural Management</strong></p></center></label><br>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/agronomy_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('agronomy', 'yes', false) }} <center><p><strong>Agronomy</strong></p></center></label><br>          
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/animal_husbandry_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('animal_husbandry', 'yes', false) }} <center><p><strong>Animal Husbandry</strong></p></center></label><br>           
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" align="center">
                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/crop_production_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('crop_prod', 'yes', false) }} <center><p><strong>Crop Production</strong></p></center></label><br>            
                                                    </div>
                                                </div>

                                                <div class="col" style="">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/food_science_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('food_sci', 'yes', false) }} <center><p><strong>Food Science</strong></p></center></label><br>           
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/forestry_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('forestry', 'yes', false) }} <center><p><strong>Forestry</strong></p></center></label><br>           
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/horticulture_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('horticulture', 'yes', false) }} <center><p><strong>Horticulture</strong></p></center></label><br>            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" align="center">
                                                <div class="col-6" align="center">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/soil_science_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('soil_sci', 'yes', false) }} <center><p><strong>Soil Science</strong></p></center></label><br>           
                                                    </div>
                                                </div>

                                                <div class="col-6" align="center">
                                                    <div class="floated_img" style="float: center; padding-top: 50px">
                                                        <div class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('assets/img/veterinary_science_logo.png') }}"></div>
                                                        <br><label>{{ Form::checkbox('vet_sci', 'yes', false) }}  <center><p><strong>Veterinary Science</strong></p></center></label><br>           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </div> -->

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col" align="center" style="">
                                                <center>
                                                    <button type="submit" class="btn" style="background-color:RGB(164, 16, 19); color: white; margin-left: 490px;">Start Search</button>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection