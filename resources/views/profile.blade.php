
@extends('layouts.app')
@section('content')
<div class="well">
    <h1>Profile</h1>
    {!! Form::open(['url' => 'profile/submit']) !!}
    <div class ="form-group">
      {{Form::label('name', 'Full name')}}
      {{Form::text('name','', ['class' => 'form-control'])}}
    </div>
    <div class ="form-group">
      {{Form::label('profile_pic', 'Profile Pic')}}
      {{Form::file('image'),'', ['class' => 'awesome']}}
    </div>
    <div class ="form-group">
      {{Form::label('Class', 'Class name')}}
      {{Form::text('Class','', ['class' => 'form-control'])}}
    </div>
    <div class ="form-group">
      {{Form::label('platform', 'Platforms Used')}}
      {{Form::text('platform','', ['class' => 'form-control'])}}
    </div>
  </div>
<div>
  {{form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
