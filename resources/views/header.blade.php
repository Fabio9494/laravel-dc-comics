@php
    $navbar = config('navbar');
@endphp

<header>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img class="px-5 pt-2" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                <ul class="list-unstyled d-flex align-items-center">
                    @foreach ($navbar as $key => $item)
                        <li class="px-2"> <a href="{{ route($key) }}"> {{ $item }} </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
