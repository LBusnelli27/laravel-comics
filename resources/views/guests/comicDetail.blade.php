@extends('layouts.base')

@section('title-tab', $comic['title'])

@section('main-content')
    <div class="container-sigle-comic">
        <div class="single-comic-presentation">
            <div class="container-single-image">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <h1>{{ $comic['title'] }}</h1>
            <div class="single-container-price">
                <span>U.S. Price {{ $comic['price'] }}</span>
                <span>AVAILABLE</span>
            </div>
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="single-comic-specs">
            <div class="comic-talent-spec">
                <h2>Talent</h2>
                <div class="single-comic-artist">
                    <span></span>
                    <span></span>
                </div>
                <div class="single-comic-writer">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="comic-spec">

            </div>
        </div>
        @dump($comic)
    </div>
@endsection
