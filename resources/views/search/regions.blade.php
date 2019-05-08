@extends('layouts.app')
<style>
    #main_cont{
        background-color:  white;;
        border-width: 2px;
        color: black;
        border-style: solid;
        border-color: #77ab59;
        width: 50%;
        float: left;
        margin-top: 20px;
        margin-left: 350px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    a,h1,p {
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

</style>
@section('content')

<div class="container-fluid" id="main_cont" align="center">
    <center><img style="width: 120px; float: center; margin-top: 15px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200950/philippines_logo.png') }}"></center>
    <br><p align="center" style="color: black; font-size: 20px;">Regions</p>

    <div class="container">
      <div class="row">

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'NationalCapitalRegion') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="NationalCapitalRegion"><br>
               </div>
                <button type="submit" style="color: #234d20;">National Capital Region</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionIVB') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionIVB"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region IV-B</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionIX') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionIX"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region IX</button>
          </form>
        </div>


        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionI') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionI"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region I</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionV') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionV"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region V</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionX') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionX"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region X</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionII') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionII"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region II</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionVI') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionVI"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region VI</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionXI') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionXI"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region XI</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionIII') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionIII"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region III</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionVII') }}" method="get">
              <div class="mysearchbar" >
                   <input name="region" type="hidden" class="form-control" value="RegionVII"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region VII</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionXII') }}" method="get">
              <div class="mysearchbar" >
                   <input name="region" type="hidden" class="form-control" value="RegionXII"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region XII</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionIVA') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionIVA"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region IV-A</button>
          </form>
        </div>

        <div class="col-sm-4">
          <form id="elasticScout" action="{{ url('searchresults/region/' . 'RegionIII') }}" method="get">
              <div class="mysearchbar">
                   <input name="region" type="hidden" class="form-control" value="RegionIII"><br>
               </div>
                <button type="submit" style="color: #234d20;">Region III</button>
          </form>
        </div>
      </div>
    </div>
    
</div>

@endsection