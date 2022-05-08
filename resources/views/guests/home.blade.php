@extends('layouts.base')

@section('title-tab', 'Homepage')

@section('main-content')
    <div class="main">
        <div class="comics-container">
            <div class="tag-current">Current Series</div>
            <div class="comics-library-container">
                @foreach ($comicsElements as $index => $comic)
                    <div class="comic-card">
                        <a href="{{ url("/$index") }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <button>Load more</button>
        </div>
        <div class="comics-buy-container">
            <div class="div-container-element">
                @foreach ($navBuyElements as $element)
                    <div class="element-comics-buy">
                        <img src="{{ asset($element['imgName']) }}" alt="{{ $element['text'] }}">
                        <p>{{ $element['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
