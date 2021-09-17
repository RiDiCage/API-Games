@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Game: {{ ucfirst($game->name) }}
                        <span class="float-right">
                            <a href="{{ route('game.show', $game->id) }}" role="button" class="btn btn-danger">
                                Back to {{ ucfirst($game->name) }}
                            </a>
                        </span>
                    </div>
                    {!! Form::model($game, ['route' => ['game.update', $game->id], 'method' => 'PUT']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="col-4">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::text('description', old('description'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="col-4">
                                {!! Form::label('release_at', 'Release date') !!}
                                {!! Form::date('release_at', old('release'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! Form::label('categories[]', 'Categories') !!}
{{--                                {!! Form::select('categories[]', $categories, [old('categories[]')], ['class' => 'form-control', 'multiple' => true]) !!}--}}
                            </div>
                            @if ($categories)
                                @foreach ($categories as $key => $category)
                                    @php $trueFalse = false @endphp

                                    @if ($game->categories->contains($key))
                                        @php $trueFalse = true @endphp
                                    @endif
                                    <div class="col-6">
                                        {!! Form::checkbox("categories[$key]", $category, $trueFalse) !!}
                                        {!! Form::label("categories[$key]", $category) !!}
                                    </div>
                                @endforeach
                            @endif
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
