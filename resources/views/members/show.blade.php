@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Member</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="form-group">
                <strong>{{ $member->name}}</strong>
                <br>
                {{ $member->email}}
            </div>
        </div>
    </div>
            <div class="text-center">
                <a class="btn btn-single btn-primary" href="{{ route('members.index') }}"> Back</a>
            </div>
@endsection