@extends('layouts.admin')

@section('title', 'insert new slip')

@section('content')

<!-- mian-content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>New record</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">bankslip/create</li>
        </ol>
    </section>
    <section class="content">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                @if (Session::has('message'))
                    <div class="alert text-center alert-success" style="font-size:25px;">{{Session::get('message')}}</div>
                @endif
                <h3 class="box-title"><u>Record new bank slip </u></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="record-form" action="{{ route('bankslip.store') }}" class="form-field" method="POST" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">Term</label>
                    <select name="term" id="exampleInputEmail1" class="form-control" require>
                        <option >term</option>
                        <option value="1">1st term</option>
                        <option value="2">2nd term</option>
                        <option value="3">3rd term</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ref n<sup>o</sup>:</label>
                    <input type="text" name="reference" placeholder="reference number" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bank name:</label>
                    <input type="text" name="bank" class="form-control" id="exampleInputPassword1" placeholder="Enter Bank name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="text" name="amount" class="form-control" id="exampleInputPassword1" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date of payment</label>
                    <input type="date" name="pay_date" class="form-control" id="exampleInputPassword1" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Telphone</label>
                    <input type="number" name="telephone" class="form-control" id="exampleInputPassword1" placeholder="0700000000">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="hardcopy" id="exampleInputFile">
                </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save slip</button>
                </div>
            </form>
        </div>
    </section>
</div>
<!-- /.box -->
@stop