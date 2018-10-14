@extends('layouts.master')

@section('content')


        {!! Form::open(['url' => ['MessageController@store']]) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        {{ Form::textarea('body',null, array_merge(['class' => 'form-control'])) }}
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        {{ Form::submit('Add Comment', ['class' => 'btn btn-primary']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

@endsection