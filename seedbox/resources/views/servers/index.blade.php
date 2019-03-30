@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Url</td>
                        <td>Status</td>
                        <td>Actions <a href="{{ URL::to('servers/create') }}" class="btn btn-small btn-h btn-success">Create a Server</a></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($servers as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->url }}</td>
                            <td>{{ $value->status }}</td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-small btn-h btn-danger" href="{{ URL::to('servers/' . $value->id . '/delete') }}">Delete</a>
                                    <a class="btn btn-small btn-h btn-success" href="{{ URL::to('servers/' . $value->id) }}">Detail</a>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('servers/' . $value->id . '/edit') }}">Edit</a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
