@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Game: {{ ucfirst($game->name) }}
                        <span class="float-right">
                            <a href="{{ route('game.index') }}" role="button" class="btn btn-danger">Back to Games</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Released at</th>
                                    <th>Edit Game</th>
                                    <th>Delete Game</th>
                                    <th>Force Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $game->name }}</td>
                                    <td>{{ $game->description }}</a></td>
                                    <td>{{ $game->release_at }}</td>
                                    <td><a href="{{ route('game.edit', $game->id) }}" role="button" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <a class="btn btn-danger" role="button" href="#"
                                           onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">
                                            Delete
                                        </a>

                                        <form id="delete-form" action="{{ route('game.delete', $game->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" role="button" href="#"
                                           onclick="event.preventDefault();
                                                    document.getElementById('destroy-form').submit();">
                                            Destroy
                                        </a>

                                        <form id="destroy-form" action="{{ route('game.destroy', $game->id) }}" method="POST" class="d-none">
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
