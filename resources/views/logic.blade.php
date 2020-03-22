@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logic</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('logic_process') }}">
                        {{ csrf_field() }}
                        <input style="width: 150px;" type="text" name="nomor">

                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="panel-body">
                    @yield('hasil')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
