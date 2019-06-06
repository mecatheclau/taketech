@extends('layouts.app')

@section('title', 'insert new slip')

@section('content')

<!-- mian-content -->
<div class="row">
    <div class="col-md-3 sider float-left p-0">
        @include('sider')
    </div>
    <div class="col-md-9 float-right">
        <div class=" p-0 whiteboard">
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
            <h3>Use the student Id to quickly search for any student</h3>
        </div>
    </div>
</div>

@stop