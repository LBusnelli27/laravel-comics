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
            </div>
        </section>


        <section class="bottom-part-footer">
            <div class="container-bottom-footer">
                <div class="sing-up-footer">
                    <button>Sing up now</button>
                </div>
                <div class="socials-footer">
                    <h2>Follow us</h2>
                    @foreach ($footerSocialsElements as $element)
                        <img src="{{ asset($element['url']) }}" alt="{{ $element['imgName'] }}">
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</footer>
