<footer>
    <div class="footer">
        <section class="top-part-footer">
            <div class="footer-container-list">
                <div class="list-side-footer">
                    <div>
                        <h2>Dc Comics</h2>
                        <ul>
                            @foreach ($footerDcComicsElements as $element)
                                <li>
                                    <a :href="{{ $element['href'] }}">{{ $element['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2>Dc</h2>
                        <ul>
                            @foreach ($footerDcElements as $element)
                            <li>
                                <a :href="{{ $element['href'] }}">{{ $element['text'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="Background footer logo">
            </div>
        </section>
    </div>
</footer>