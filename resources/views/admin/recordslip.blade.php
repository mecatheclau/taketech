@extends('layouts.app')

@section('title', 'insert new slip')

@section('content')

<!-- mian-content -->
<div class="row p-0 whiteboard">
    <div class="col-md-12 col-sm-12 text-center">
        <h1><u>Record new bank slip </u> </h1>
        <div class="">
            <form action="{{ route('bankslip.store') }}" method="POST" class="form-field">
                @csrf()
                <div class="row p-0 m-4">
                    <div class="col-md-4 float-left">
                        <label for="user">ID:</label>
                    </div>
                    <div class="col-md-8 float-right">
                        <input type="text" name="student" placeholder="Student id" id="">
                    </div>
                </div>
                <div class="row p-0 m-4">
                    <div class="col-md-4 float-left">
                        <label for="user">Academy:</label>
                    </div>
                    <div class="col-md-8 float-right">
                        <input type="text" name="academy" placeholder="academic year" id="">
                    </div>
                </div>
                <div class="row p-0 m-4">
                    <div class="col-md-4 float-left">
                        <label for="user">Class:</label>
                    </div>
                    <div class="col-md-8 float-right">
                        <input type="text" name="class" placeholder="class" id="">
                    </div>
                </div>
                <div class="row p-0 m-4">
                    <div class="col-md-4 float-left">
                        <label for="user">BAnk name:</label>
                    </div>
                    <div class="col-md-8 float-right">
                        <input type="text" name="bank" placeholder="Bank name" id="">
                    </div>
                </div>
                <div class="row p-0 m-4">
                    <div class="col-md-4 float-left">
                        <label for="user">ref n<sup>o</sup>:</label>
                    </div>
                    <div class="col-md-8 float-right">
                        <input type="text" name="reference" placeholder="reference no" id="">
                    </div>
                </div>
                <div class="row p-0 m-4">
                    <div class="col-md-4 float-left">
                        <label for="user">Amount:</label>
                    </div>
                    <div class="col-md-8 float-right">
                        <input type="text" name="amount" placeholder="amount" id="">
                    </div>
                </div>
                <div class="row p-2">
                    <button type="submit" class="btn btn-primary w-100">record slip</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop