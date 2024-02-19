@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">MODIFICA FUMETTO</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('comic.update', $comic) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="description">descrizione</label>
                        <textarea name="description" id="description" class="form-control" value="{{ $comic->description }}" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumb">link immagine</label>
                        <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="series">serie</label>
                        <input type="text" name="series" id="series" class="form-control"
                            value="{{ $comic->series }}" required>
                    </div>
                    <div class="form-group">
                        <label for="sale_date">data</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control"
                            value="{{ $comic->sale_date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="type">tipo</label>
                        <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="artists">artisti</label>
                        <input type="text" name="artists" id="artists" class="form-control"
                            value="{{ $comic->artists }}" required>
                    </div>
                    <div class="form-group">
                        <label for="writers">scrittori</label>
                        <input type="text" name="writers" id="writers" class="form-control"
                            value="{{ $comic->writers }}" required>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary my-3">SALVA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection