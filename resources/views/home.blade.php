@extends('layouts.approver')
@section('content')
<div class="container">
    <div class="container" style="margin-top: 80px; margin-left: 120px;">
        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
            <a href="/journalCRUD"><img style="width: 300px;" src="{{ asset('assets/img/manage_journals_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>MANAGE JOURNALS</strong></p></center>
        </div>
        <div class="floated_img" style="float: left; padding-right: 100px; padding-top: 50px">
            <a href="/SearchQuery"><img style="width: 300px;" src="{{ asset('assets/img/search_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>START SEARCH</strong></p></center>
        </div>
    </div>
</div>
@endsection
