@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    User: {{ ucfirst($user->name) }}
                    <span class="float-right">
                        <a href="{{ route('user.show', $user) }}" role="button" class="btn btn-danger">Back to {{ $user->name }}</a>
                    </span>
                </div>
                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-6">
                            {!! Form::label('email', 'E-Mail Address') !!}
                            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
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
