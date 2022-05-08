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
                    <span>Art by:</span>
                    <span>
                        @foreach ($comic['artists'] as $artist)
                            {{ $artist }}, 
                        @endforeach
                    </span>
                </div>
                <div class="single-comic-writer">
                    <span>Written by:</span>
                    <span>
                        @foreach ($comic['writers'] as $writer)
                            {{ $writer }}, 
                        @endforeach
                    </span>
                </div>
            </div>
            <div class="comic-spec">
                <h2>Specs</h2>
                <div>
                    <span>Series:</span>
                    <span>{{ $comic['series'] }}</span>
                </div>
                <div>
                    <span>U.S. Price:</span>
                    <span>{{ $comic['price'] }}</span>
                </div>
                <div>
                    <span>On Sale Date:</span>
                    <span>{{ $comic['sale_date'] }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
