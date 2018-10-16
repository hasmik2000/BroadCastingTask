@extends('layouts.master')
@section('content')
    {{--<h1 class="text-center">Chat Application</h1>--}}
    {{--<div id="app">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">Chats</div>--}}

                        {{--<div class="panel-body">--}}
                            {{--<chat-messages :messages="messages"></chat-messages>--}}
                            {{--<message :message="'This is a message'"></message>--}}
                        {{--</div>--}}
                        {{--<div class="panel-footer">--}}
                            {{--<sent-message--}}
                                    {{--v-on:messagesent="addMessage "--}}
                                    {{--:user="{{ Auth::user() }}"--}}
                            {{--></sent-message>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<message :messages="This is messages"></message>--}}
        {{--<sent-message v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></sent-message>--}}
    {{--</div>--}}

    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4">
                <ul class="list-group" v-chat-scroll>
                    <li class="list-group-item active">Chat Room</li>
                    <message
                            v-for="value in chat.message"
                            :key="value.index"
                            color="success"
                    >
                            @{{ value }}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Type your message here" v-model="message" @keyup.enter="send">
            </div>
        </div>
    </div>
@endsection