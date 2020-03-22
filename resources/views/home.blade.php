@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="panel panel-default">
                    <div class="box-menu">
                        <a href="{{ route('logic') }}"><button class="button-menu">Logic</button></a>
                        <a href="{{ route('data_siswa')}}"><button class="button-menu">Database</button></a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
