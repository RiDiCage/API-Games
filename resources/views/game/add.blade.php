@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add Game:
                        <span class="float-right">
                            <a href="{{ route('game.index') }}" role="button" class="btn btn-danger">
                                Back to Games
                            </a>
                        </span>
                    </div>
                    {!! Form::open(['route' => ['game.store'], 'method' => 'POST']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-4" style="display:none">
                                {!! Form::label('id', 'ID') !!}
                                {!! Form::text('id', old('id'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="col-12 col-md-4">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="col-12 col-md-4">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::text('description', old('description'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="col-12 col-md-4">
                                {!! Form::label('release_at', 'Release date') !!}
                                {!! Form::date('release_at', old('release'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! Form::label('categories[]', 'Categories') !!}
{{--                                {!! Form::select('categories[]', $categories, [old('categories[]')], ['class' => 'form-control', 'multiple' => true]) !!}--}}
                            </div>
                            @foreach ($categories as $key => $category)
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    {!! Form::checkbox("categories[$key]", $category, false) !!}
                                    {!! Form::label("categories[$key]", $category) !!}
                                </div>
                            @endforeach
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
