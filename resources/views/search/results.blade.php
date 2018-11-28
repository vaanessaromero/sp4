@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-header">SEARCH RESULTS</div>

                <form id="elasticScout" action="/SearchQuery" method="get">
                     <div class="mysearchbar">
                         <input name="search" placeholder="Search...">
                     </div>
                </form>

                <table class="table table-bordered">
                    <tr>
                        <th>Journal ID</th>
                        <th>Title</th>
                        <th>Author/s</th>
                        <th>Date Published</th>
                        <th>Abstract</th>
                        <th>DOST-PCAARRD Branch</th>
                    </tr>
                    @if(!empty($journals))
                        @foreach ($journals as $journal)
                            <tr>
                                <td class= "color">{{ $journal->id }} </td>
                                <td class= "color">{{ $journal->title }}</td>
                                <td class= "color">{{ $journal->author }}</td>
                                <td class= "color">{{ $journal->date }}</td>
                                <td class= "color">{{ $journal->abstract }}</td>
                                <td class= "color">{{ $journal->branch }}</td>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection