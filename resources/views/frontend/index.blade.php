@extends('layouts.master-frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(Auth::check())
                        You're logged in, Welcome!
                    @else
                        Welcome to our site
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
