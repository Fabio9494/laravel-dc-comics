@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">AGGIUNGI FUMETTO</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-warning" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif
            <div class="col-12">
                <form action="{{ route('comic.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('title')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="text" name="price" id="price" value="{{ old('price') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('price')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">descrizione</label>
                        <textarea name="description" id="description" value="{{ old('description') }}"
                            class="form-control @error('title') is-invalid @enderror" required></textarea>
                        @error('description')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumb">link immagine</label>
                        <input type="text" name="thumb" id="thumb" value="{{ old('thumb') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('thumb')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="series">serie</label>
                        <input type="text" name="series" id="series" value="{{ old('series') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('series')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale_date">data</label>
                        <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('sale_date')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">tipo</label>
                        <input type="text" name="type" id="type" value="{{ old('type') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('type')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="artists">artisti</label>
                        <input type="text" name="artists" id="artists" value="{{ old('artists') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('artists')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="writers">scrittori</label>
                        <input type="text" name="writers" id="writers" value="{{ old('writers') }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('writers')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary my-3">SALVA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
