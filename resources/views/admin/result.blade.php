@extends('layouts.app')

@section('title', 'insert new slip')

@section('content')

<!-- mian-content -->
<div class="row p-0 whiteboard">
<div class="row p-0">
    <table class="recorded m-4">
        <tr><th>First name</th> <th> Last name </th> <th>acedemic year</th> <th>amount</th></tr>
        @foreach($data as $result)

        <tr><td>{{ $result->firstname }}</td><td>{{ $result->lastname }}</td><td>{{ $result->academy }}</td><td>{{ $result->amount }}</td></tr>

        @endforeach
    
    </table>
</div>
</div>
@stop