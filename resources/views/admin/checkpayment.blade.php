@extends('layouts.admin')

@section('title', 'insert new slip')

@section('content')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Dashboard
        <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
       
            <!-- ./col -->
            <h3>Use the student Id,class to quickly search for any student</h3>
            <form action="{{ url('checkpayment/student-no') }}" method="POST" class="record-form" class="form-field">
                @csrf
                <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Student id</label>
                    <input type="search" name="q"class="form-control" id="exampleInputEmail1" placeholder="Enter student id">
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
            <!-- /.row (main row) -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@stop