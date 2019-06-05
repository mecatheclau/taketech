@extends('layouts.app')

@section('title', 'insert new slip')

@section('content')

<!-- mian-content -->
<div class="row p-0 whiteboard">
<div class="row p-0">
    <form action="{{ url('checkpayment/student-no') }}" method="get">
        @csrf()
        <div class="row p-0 m-4">
            <div class="col-md-4 float-left">
                <label for="user">FILTER BY ID:</label>
            </div>
            <div class="col-md-8 float-right">
                <input type="text" name="student" placeholder="Student id" id="">
            </div>
        </div>
    </form>
</div>
</div>
@stop