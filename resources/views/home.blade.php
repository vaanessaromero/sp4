@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    
                    <a href="/SearchQuery">Start Search</a>
                    <br><br>
                    <a href="/journalCRUD">Manage Journals</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
