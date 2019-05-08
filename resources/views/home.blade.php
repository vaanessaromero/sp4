@extends('layouts.approver')
<style>
    html, body {
        background-color: #f0f7da;
    }
</style>

@section('content')
<div class="container">
    <div class="container" align="center" style="margin-top: 80px; padding-left: 120px;">
        <div class="floated_img" style="float: left; margin-right: 50px; margin-top: 50px">
            <a href="/journalCRUD" class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200951/manage_journals_logo.png') }}"></a>
            <center><p style="font-size: 15px; color: black"><strong>MANAGE JOURNALS</strong></p></center>
        </div>
        <div class="floated_img" style="float: left; margin-right: 50px; margin-top: 50px">
            <a href="/subjectCRUD" class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200948/author_logo.png') }}"></a>
            <center><p style="font-size: 15px; color: black"><strong>MANAGE SUBJECT FIELDS</strong></p></center>
        </div>
        <div class="floated_img" style="float: left; margin-right: 50px; margin-top: 50px">
            <a href="/" class="btn btn-default btn-rounded mb-4"><img style="width: 150px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200953/search_3_logo.png') }}"></a>
            <center><p style="font-size: 15px; color: black"><strong>START SEARCH</strong></p></center>
        </div>
    </div>
</div>
@endsection
