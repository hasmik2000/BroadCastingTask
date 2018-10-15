@extends('layouts.master')
@section('content')
    <div id="app">
        This is the event listener
    </div>
    {!! Form::open(['url' => ['MessageController@send']]) !!}
    <div class="form-group">
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    {{--<input type="hidden" value="{{ $user->id }}">--}}
                    {{ Form::textarea('message',null, array_merge(['class' => 'form-control'])) }}
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