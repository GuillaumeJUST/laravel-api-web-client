@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Servers</b></h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ URL::to('servers/create') }}" class="btn btn-small btn-h btn-success"><span>Add New server</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Url</td>
                        <td>Status</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($servers as $key => $value)
                        <tr>
                            <td class="align-middle">{{ $value->name }}</td>
                            <td class="align-middle">{{ $value->url }}</td>
                            <td class="align-middle">{{ $value->status }}</td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td class="align-right">
                                <a class="btn btn-xs btn-danger" href="{{ URL::to('servers/' . $value->id . '/delete') }}">Delete</a>
                                <a class="btn btn-xs btn-warning" href="{{ URL::to('servers/' . $value->id . '/edit') }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
