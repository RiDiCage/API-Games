@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User: {{ ucfirst($user->name) }}
                    <span class="float-right">
                        <a href="{{ route('user.index', $user) }}" role="button" class="btn btn-danger">Back to Users</a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Games</th>
                            <th>Created at</th>
                            <th>Edit User</th>
                            <th>Delete User</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>

                                <td>{{ $user->games->count() }}</td>

                                <td title="{{ $user->created_at }}">{{ $user->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('user.edit', $user->id) }}" role="button" class="btn btn-warning">Edit</a></td>

                                <td>
                                    <a class="btn btn-danger" role="button" href="#"
                                       onclick="event.preventDefault();
                                                document.getElementById('delete-form').submit();">
                                        Delete
                                    </a>

                                    <form id="delete-form" action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>


                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
