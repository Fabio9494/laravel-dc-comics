@php
    $navbar = config('navbar');
@endphp

<footer>
    <div>
        <ul>
            <li>
                <h2>DC COMICS</h2>
            </li>
            @foreach ($navbar as $key => $item)
                <li> <a href="{{ route($key) }}"> {{ $item }} </a></li>
            @endforeach

            <li>
                <h2>SHOP</h2>
            </li>
            <li> <a href="#"> Shop DC </a></li>
            <li> <a href="#"> Shop DC Collectibles </a></li>
        </ul>
        <ul>
            <li>
                <h2>DC</h2>
            </li>
            <li> <a href="#"> Terms of Use </a></li>
            <li> <a href="#"> Privacy Policy </a></li>
            <li> <a href="#"> Ad Choices </a></li>
            <li> <a href="#"> Advertising </a></li>
            <li> <a href="#"> Jobs </a></li>
            <li> <a href="#"> Subscriptions </a></li>
            <li> <a href="#"> Talent Workshops </a></li>
            <li> <a href="#"> CPSC Certificates </a></li>
            <li> <a href="#"> Ratings </a></li>
            <li> <a href="#"> Shop Help </a></li>
            <li> <a href="#"> Contact Us </a></li>
        </ul>
        <ul>
            <li>
                <h2>SITES</h2>
            </li>
            <li> <a href="#"> DC </a></li>
            <li> <a href="#"> MAD Magazine </a></li>
            <li> <a href="#"> DC Kid </a></li>
            <li> <a href="#"> DC Universe </a></li>
            <li> <a href="#"> DC Power Visa </a></li>
        </ul>
    </div>
    <div class="logo-img">
        <img class="logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
    </div>
</footer>

<div class="footer-second-row">
    <div class="col-12 d-flex justify-content-between">
        <div class="container-button"><button>SING-UP NOW</button></div>
        <div class="follow-us">
            <ul>
                <li>
                    <h2>FOLLOW-US</h2>
                </li>
                <li><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt=""></li>
                <li><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt=""></li>
                <li><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt=""></li>
                <li><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt=""></li>
                <li><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt=""></li>
            </ul>
        </div>
    </div>
</div>
