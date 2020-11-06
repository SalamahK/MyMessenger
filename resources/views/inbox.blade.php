@extends('layouts.app')
@section('content')
<header>
    <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-secondary shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('create') }}">
                            New message
                            </a>
                            <a class="navbar-brand" href="{{ route('sent-messages') }}">
                            Sent 
                        </a>
                        <a class="navbar-brand" href="{{ route('deleted-messages') }}">
                            Deleted Thread
                        </a>
                       
                </div>
    </div>
</header>
<body>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Inbox</div>
                            @if (count($inputs) > 0)
                                <ul class="list-group">
                                    @foreach($inputs as $message)
                                    <a href="{{ route('read', $message->id) }}">
                                        <li class="list-group-item"> 
                                        <strong>From: {{$message->userFrom->name}}</strong> | Subject: {{ $message->subject }}
                                        </li>
                                    </a>
                                    @endforeach
                                </ul>
                            @else
                                No messages!
                            @endif
</body>
@endsection