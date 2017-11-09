
@extends('layouts.app')
@section('content')

    <div class="jumbotron" text-center ">
        <div class="container">
            <p><img src="{{\Illuminate\Support\Facades\Session::get('avatar')}}">
                <p>Hi {{\Illuminate\Support\Facades\Session::get('name')}}</p>
        </div>


@endsection
