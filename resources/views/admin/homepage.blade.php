@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3 sider float-left p-0">
        @include('sider')
    </div>
    <div class="col-md-9 float-right">
        <div class="crd m-4 bg-primary">
            record
        </div>
        <div class="crd m-4 bg-success">
            record
        </div>
        <div class="crd m-4 bg-info">
            record
        </div>
    </div>
</div>
@endsection