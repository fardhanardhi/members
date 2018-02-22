@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Members</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-single btn-success " href="{{ route('members.create') }}"> Create New Member</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th width="10 class="text-center"">No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px" class="text-center">Operation</th>
        </tr>
    @foreach ($members as $member)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $member->name}}</td>
        <td>{{ $member->email}}</td>
        <td class="text-center">
            <a class="btn btn-action btn-info" href="{{ route('members.show',$member->id) }}">Show</a>
            <a class="btn btn-action btn-primary" href="{{ route('members.edit',$member->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['members.destroy', $member->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-action btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $members->render() !!}
@endsection