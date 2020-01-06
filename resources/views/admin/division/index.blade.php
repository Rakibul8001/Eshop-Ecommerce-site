@extends('admin.layout.master')
@section('dashboard')

    <div class="content-wrapper">
        <h3 class="page-heading-md-4">Show Division</h3>
        <div class="row-md-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin.partials.messages')
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                            @php($i=0)
                            @foreach($divisions as $division)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $division->name }}</td>
                                    <td>{{ $division->priority }}</td>
                                    <td>
                                        <a href="{{route('division.edit',$division->id)}}" class="btn btn-success">
                                            <span><i class="fa fa-edit"></i></span>
                                        </a>
                                        <a href="{{route('division.delete',$division->id)}}" class="btn btn-danger">
                                            <span><i class="fa fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





