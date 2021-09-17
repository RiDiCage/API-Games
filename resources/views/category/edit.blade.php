@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Category: {{ ucfirst($category->name) }}
                        <span class="float-right">
                            <a href="{{ route('category.show', $category->id) }}" role="button" class="btn btn-danger">
                                Back to {{ ucfirst($category->name) }}
                            </a>
                        </span>
                    </div>
                    {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PUT']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
