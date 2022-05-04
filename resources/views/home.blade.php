@extends('layouts.base')

@section('header')
    @php
        $navbar = ['Characters', 'Comics', 'Movies', 'Games', 'Tv', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
    @endphp
    
    <ul>
        @foreach ($navbar as $element)
            <li>
                {{ $element }}
            </li>
        @endforeach
    </ul>
@endsection


@section('footer')
    <h1>Ciao sono nell'footer</h1>
@endsection