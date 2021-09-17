@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Users:
                    <span class="float-right">
                        <a href="{{ route('game.index') }}" role="button" class="btn btn-warning">Game lijst</a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Info User</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                <td title="{{ $user->created_at }}">{{ $user->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('user.show', $user->id) }}" role="button" class="btn btn-success">Show</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
