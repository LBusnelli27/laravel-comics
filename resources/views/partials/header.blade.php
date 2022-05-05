<header>
    <div>
        <nav>
            <img src="{{ asset("images/dc-logo.png") }}" alt="Header DC Logo">
            <ul>
                @foreach ($headerElements as $element)
                    <li class="nav-element">
                        <a href="{{ $element['link'] }}">{{ $element['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>