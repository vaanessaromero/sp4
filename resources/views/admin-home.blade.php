@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="container" style="margin-top: 100px;">
        <div class="floated_img" style="float: left; margin-right: 100px; margin-top: 50px">
            <a href="/userCRUD"><img style="width: 270px;" src="{{ asset('assets/img/manage_users_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>MANAGE USERS</strong></p></center>
        </div>
        <div class="floated_img" style="float: left; margin-right: 100px; margin-top: 50px">
            <a href="/journalCRUD"><img style="width: 270px;" src="{{ asset('assets/img/manage_journals_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>MANAGE JOURNALS</strong></p></center>
        </div>
        <div class="floated_img" style="float: left; margin-right: 100px; margin-top: 50px">
            <a href="/SearchQuery"><img style="width: 270px;" src="{{ asset('assets/img/search_logo.png') }}"></a>
            <center><p style="font-size: 20px; color: black"><strong>START SEARCH</strong></p></center>
        </div>
    </div>
</div>
@endsection
