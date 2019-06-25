@extends('layouts.print')

@section('title', 'insert new slip')

@section('content')

<!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-primary">
            <div class="">
                <div class="">
                    <table class="recorded m-4 table table-hover ">
                        <thead>
                        <th>First name</th> <th> Last name </th> <th>acedemic year</th> <th>Class</th> <th>Bank</th> <th>amount</th><th>action</th></thead>
                        @foreach($data as $result)

                        <tbody>
                        <tr>
                            <td>{{ $result->firstname }}</td>
                            <td>{{ $result->lastname }}</td>
                            <td>{{ $result->academy }}</td>
                            <td>{{ $result->class }}</td>
                            <td>{{ $result->bank }}</td>
                            <td>{{ $result->amount }}</td>
                            <td>
                                <a class="bg-info btn text-light"><i class="fa fa-eye"> view</i></a>
                                <a class="bg-success btn text-light"><i class="fa fa-pencil"> update</i></a>
                                <a class="bg-danger btn text-light"><i class="fa fa-remove"> delete</i></a>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
</section>