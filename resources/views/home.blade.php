@extends('layouts.main')

@section('title', 'Home')

@section('main-content')

    <div class="container content">
        @foreach ($comics as $comic)
            <div class="card-container">
                <a href="{{ url('/comic') }}">
                    <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}">
                </a>
                <p>{{ $comic['series'] }}</p>
            </div>
        @endforeach

    </div>
    <div class="flex-center">
        <button>SIGN-UP NOW!</button>
    </div>
    <div class="main-menu">

    </div>

@endsection
