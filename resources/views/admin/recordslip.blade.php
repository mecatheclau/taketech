@extends('layouts.admin')

@section('title', 'insert new slip')

@section('content')

<!-- mian-content -->
<div class="content-wrapper">
        <!-- general form elements -->
        <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><u>Record new bank slip </u></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="record-form" action="{{ route('bankslip.store') }}" method="POST" class="form-field">
        @csrf()
        <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Student id</label>
            <input type="text" name="student" placeholder="Student id" class="form-control" id="exampleInputEmail1" placeholder="Enter student id">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Academy year</label>
            <input type="text" name="academy" class="form-control" id="exampleInputPassword1" placeholder="Academy year">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <input type="text" name="class"  class="form-control" id="exampleInputEmail1" placeholder="Enter student class">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ref n<sup>o</sup>:</label>
            <input type="text" name="reference" placeholder="reference number" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">BAnk name:</label>
            <input type="text" name="bank" class="form-control" id="exampleInputPassword1" placeholder="Enter BAnk name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Amount</label>
            <input type="text" name="amount" class="form-control" id="exampleInputPassword1" placeholder="Amount">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">

        </div>
        <div class="checkbox">
            <label>
            <input type="checkbox"> Check to agree before send
            </label>
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
    <!-- /.box -->
@stop