@extends('layouts.master-frontend')

@section('content')
    <div class="container">
        <div class="content">
            You're not allowed to access this page, <a href="{{ url()->previous() }}">Click here</a> to go back
        </div>
    </div>
@endsection

