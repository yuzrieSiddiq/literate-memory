@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h4>Welcome {{ $name }}</h4>
                    You are logged in!
                    Role: {{ $role }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
