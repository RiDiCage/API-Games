@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category: {{ ucfirst($category->name) }}
                        <span class="float-right">
                            <a href="{{ route('category.index') }}" role="button" class="btn btn-danger">Back to Categories</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit Category</th>
                                    <th>Delete Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td><a href="{{ route('category.edit', $category->id) }}" role="button" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <a class="btn btn-danger" role="button" href="#"
                                           onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">
                                            Delete
                                        </a>

                                        <form id="delete-form" action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-none">
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
