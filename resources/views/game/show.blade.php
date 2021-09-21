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
                                    @if (!\Illuminate\Support\Facades\Auth::user()->games->contains($game->id))
                                        <th>
                                            Link to Account

                                            <form id='addGame-{{ $game->id }}' action="{{ route('game.addLink', $game->id) }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </th>
                                    @else
                                        <th>Edit Game</th>
                                        <th>Delete Game</th>
                                        <th>Force Delete</th>

                                        <form id='removeGame-{{ $game->id }}' action="{{ route('game.removeLink', $game->id) }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $game->name }}</td>
                                    <td>{{ $game->description }}</a></td>
                                    <td>{{ $game->release_at }}</td>
                                    @if (!\Illuminate\Support\Facades\Auth::user()->games->contains($game->id))
                                        <td>
                                            <a href="#" class="btn btn-success" role="button"
                                               onclick="event.preventDefault();
                                                   document.getElementById('addGame-{{ $game->id }}').submit();">+</a>

                                            <form id='addGame-{{ $game->id }}' action="{{ route('game.addLink', $game->id) }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </td>
                                    @else
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
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
