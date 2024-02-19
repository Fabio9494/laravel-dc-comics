@extends('layout.app')

@section('content')
    <main>
        <div class="jumbotron"></div>
        <div class="current-series">CURRENT SERIES</div>

        <div class="container-main">
            <div class="container-fumetti">
                @foreach ($comics as $comic)
                    <div class="card-fumetto text-center">
                        <a href="{{ route('comic.show', ['comic' => $comic->id]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <h4 class="fs-6 p-2">{{ $comic['title'] }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('comic.create') }}" class="btn btn-primary mb-3">AGGIUNGI</a>
        </div>
        </div>
    </main>
@endsection
