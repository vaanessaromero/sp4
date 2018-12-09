@extends('layouts.approver')
<style>
    html, body {
        background-color: #f0f7da;
    }
</style>

@section('content')
<div class="container" style="background-color: #f0f7da">
    <div class="container" align="center" style="margin-top: 80px; margin-left: 120px;">
        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
            <a href="/journalCRUD" class="btn btn-default btn-rounded mb-4"><img style="width: 250px;" src="{{ asset('assets/img/manage_journals_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>MANAGE JOURNALS</strong></p></center>
        </div>
        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
            <a href="/search" class="btn btn-default btn-rounded mb-4"><img style="width: 250px;" src="{{ asset('assets/img/search_3_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>START SEARCH</strong></p></center>
        </div>
    </div>
</div>
@endsection
