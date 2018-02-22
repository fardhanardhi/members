@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Edit Member</h2>
            </div>
            <div class="text-center">
                <a class="btn btn-single btn-primary" href="{{ route('members.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($member, ['method' => 'PATCH','route' => ['members.update', $member->id]]) !!}
        @include('members.form')
    {!! Form::close() !!}
@endsection