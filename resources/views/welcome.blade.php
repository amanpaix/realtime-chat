<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .list-group {
                overflow-y: scroll;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" id="app">
                <div class="col-md-4">
                    <li class="list-group-item">Chat Room</li>
                    <ul class="list-group" v-chat-scroll>
                        <message v-for="message in chat.message">@{{ message }}</message>
                    </ul>
                    <input @keyup.enter='send' v-model='message' type="text" class="form-control" placeholder="Type your message here..." autofocus>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
