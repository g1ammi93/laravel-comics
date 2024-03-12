@extends('layouts.main')

@section('main-content')
    <h1 class="comic-title">{{ $comic['title'] }}</h1>
    <p class="comic-p">{{ $comic['price'] }}</p>
    <p class="comic-p">{{ $comic['description'] }}</p>
@endsection
