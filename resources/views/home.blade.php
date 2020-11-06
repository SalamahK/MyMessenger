@extends('layouts.app')
@section('content')
<header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-secondary shadow-sm">
                <div class="container">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-size: 20px; color: black"  href="{{ route('inbox') }}">
                            Chatbox
                            </a>
                            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                 </button> -->
                </div>
    </div>
</header>
@endsection
