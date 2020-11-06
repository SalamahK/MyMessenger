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
                            <a class="navbar-brand" href="{{ route('inbox') }}">
                            Inbox
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
    </div>
</header>
    <main class="py-4">
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sent</div>
    @if (count($inputs) > 0)
        <ul class="list-group">
            @foreach($inputs as $message)
                <li class="list-group-item"><strong>To: {{$message->userTo->name}}, {{ $message->userTo->email }}</strong> | Subject: {{ $message->subject }}
                @if ($message->read)
                    <span class="badge badge-success float-right">READ</span>
                @endif
                </li>
            @endforeach
        </ul>
    @else
        No messages!
    @endif
@endsection
