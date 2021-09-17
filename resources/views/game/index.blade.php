@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Games:
                        <span class="float-right">
                            <a href="{{ route('user.index') }}" role="button" class="btn btn-danger">Back to Users</a>
                            <a href="{{ route('game.add') }}" role="button" class="btn btn-warning">Add Game</a>
                            <a href="{{ route('category.index') }}" role="button" class="btn btn-warning">Categories</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Released at</th>
                                    <th>Link</th>
                                    <th>Info Game</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{ $game->name }}</td>
                                    <td>{{ $game->description }}</td>
                                    <td>{{ $game->release_at }}</td>
                                    <td>
                                        @if (!\Illuminate\Support\Facades\Auth::user()->games->contains($game->id))
                                            <a href="#" class="btn btn-success" role="button"
                                               onclick="event.preventDefault();
                                                   document.getElementById('addGame-{{ $game->id }}').submit();">+</a>

                                            <form id='addGame-{{ $game->id }}' action="{{ route('game.addLink', $game->id) }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a href="#" class="btn btn-danger" role="button"
                                               onclick="event.preventDefault();
                                                   document.getElementById('removeGame-{{ $game->id }}').submit();">-</a>

                                            <form id='removeGame-{{ $game->id }}' action="{{ route('game.removeLink', $game->id) }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('game.show', $game->id) }}" role="button" class="btn btn-success">Show</a></td>

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
