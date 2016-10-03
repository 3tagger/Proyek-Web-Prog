@extends('layouts.master-frontend')

@section('content')
    <div class="container">
        <div class="content">
            Page Not Found, <a href="{{ url()->previous() }}">Click here</a> to go back
        </div>
    </div>
@endsection

