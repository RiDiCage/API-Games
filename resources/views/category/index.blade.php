@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Categories:
                        <span class="float-right">
                            <a href="{{ route('game.index') }}" role="button" class="btn btn-danger">Back to Games</a>
                            <a href="{{ route('category.add') }}" role="button" class="btn btn-warning">Add Category</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit or Delete Category</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($Categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td><a href="{{ route('category.show', $category->id) }}" role="button" class="btn btn-success">Show</a></td>
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
