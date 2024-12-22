@extends('layouts.admin.master')


@section('content')
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(session('name'))
    <div class="alert alert-success">
        {{ session('name') }}
    </div>
@endif

@endsection