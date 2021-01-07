@extends('layouts.main')

@section('content')
    <main class="comic-detail">
        <section class="general-hero" style = "background-image: url( {{ $comic['image-hero'] }} );">
            <div class="container">
                <img class= "mt-9"src="{{  $comic['image-cover'] }}" alt="{{ $comic['title'] }} ">
            </div>
        </section>

        <section class="details mt-1">
            <div class="container">
                <h1> {{ $comic['title'] }} </h1>
                <div class="price">{{ $comic['price'] }}</div>
                <div class="text">{!! $comic['body'] !!}</div>
            </div>
        </section>
    </main>
@endsection
