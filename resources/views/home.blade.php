@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        <section class="general-hero">
            <div class="container">
                <img class= "mt-9"src="{{ asset('images/cover-home.jpg') }}" alt="teen go lorem">
            </div>
        </section>

        <section class="comics mt-1">
            <div class="container">
                <ul class="comics-list ">
                   @foreach ($comics as $comic)
                   <li class="mt-2" >
                       <a href=" {{ route('comic-detail', $comic['slug']) }} "> {{--  <------ guarda il ComicControllerPHP nei Controller  --}}
                           <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                           <h3> {{ $comic['title'] }} </h3>
                       </a>
                   </li>
                   @endforeach
                </ul>
                <div class="button">
                    <button class="blue-botton">
                    LOAD MORE
                    </button>
                </div>
            </div>
        </section>

        <section class="section-blue">
            <div class="container">
                <ul>
                        <li>
                            <a href="">icon</a>
                        </li>
                        <li>
                            <a href="">icon</a>
                        </li>
                        <li>
                            <a href="">icon</a>
                        </li>
                        <li>
                            <a href="">icon</a>
                        </li>
                    </ul>
            </div>
        </section>
    </main>
@endsection

