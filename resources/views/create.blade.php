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
                        <div class="card-header">Inbox</div>
                            <form action="{{ route('send') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="to">To</label>
                                    <select class="form-control" name="to" id="to">
                                    @foreach($users as $user)
                                        <option value="{{$user->id }}">{{ $user->name }}, {{$user->email }}</option>
                                    @endforeach
                                    </select>
                                </div>

                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        @if ($subject == ' ' || $subject == "Re".$subject)
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject" value="{{  $subject }}">
                                        @else
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Re: " value="{{ $subject }}">
                                        @endif
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                                        </div>
    
                    </div>            
                </div>
            </div>
        </div>
    </main>

@endsection