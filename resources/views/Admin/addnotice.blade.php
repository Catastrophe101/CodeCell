@extends('layouts.app')
@section('content')

    @if(\Illuminate\Support\Facades\Session::get('role')==='admin')
    <form action="store_notices" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title of contest">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control" id="link" name="link" placeholder="Link for contest">
        </div>
        <div class="form-group">
            <label for="platform">Platform</label>
            <input type="text" class="form-control" id="platform" name="platform" placeholder="Platform for contest">
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Starting date for the contest">
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Ending date for contest">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    @else
        <h1>Sick skills bruh</h1>
    @endif
@endsection
