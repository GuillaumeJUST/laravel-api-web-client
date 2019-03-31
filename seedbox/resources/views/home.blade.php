@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Servers
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="link" href="{{ URL::to('servers/') }}">Show All</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row">
                        @foreach($servers as $server)
                        <div class="col-md-4">
                            <div class="card border-{{$server->color}} mb-3">
                                <div class="card-header text-{{$server->color}}">
                                    {{$server->name}}
                                </div>

                                <div class="card-body">
                                    Status: <b class="text-{{$server->color}}">{{$server->status}}</b><br>
                                    Updated: {{$server->updated_at}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @if(count($servers) < 6)
                            <div class="col-md-4">
                                <div class="card mb-3 text-center">
                                    <div class="card-header">
                                        Add New server
                                    </div>

                                    <div class="card-body">
                                        <a href="{{ URL::to('servers/create') }}" class="btn btn-small btn-h btn-success"><span>Add New server</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
