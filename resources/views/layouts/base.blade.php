<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics - @yield('title-tab')</title>

    @yield('head-scripts')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;1,700&display=swap"
        rel="stylesheet">
</head>



<body>
    @include('partials.header', ['headerElements' => config('header-links')])


    <main>
        @yield('main-content')
    </main>


    @include('partials.footer', ['footerDcElements' => config('footerDc'), 'footerDcComicsElements' => config('footerDcComics'), 'footerSocialsElements' => config('footerSocials')])
</body>

</html>
