@extends('layouts.app')
@section('content')
<div class="jumbotron" text-center>
  <div class="container">
    <h1>NOTICES</h1>
    <br>
    <br>
<p class ="lead">Here you will find details of all the on going coding events</p>
</div >

@foreach(\Illuminate\Support\Facades\DB::table('notices')->get() as $notice)
    <div class ="well">
      <p class="jumbotron"><a href="{{ $notice->link }}">{{ $notice->title }}</a>
      <p>Platform: {{ $notice->title }}<br>Startdate: {{ $notice->start_date }}</p>
      </p>
    </div>
@endforeach

</div>
@endsection
