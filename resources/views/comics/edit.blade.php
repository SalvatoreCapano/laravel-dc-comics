@extends('layouts.app')

@section('page_title')
    Edit Comic | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">Modifica il fumetto {{ $comic->title }}</h1>
    <div class="formContainer">

        <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="editForm">
            @csrf
            @method('PUT')

            <div class="inputs">
                <div class="inputGroup">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" required maxlength="64"
                        value="{{ $comic->title }}" placeholder="Inserisci il titolo">
                </div>
                <div class="inputGroup">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" required maxlength="64"
                        value="{{ $comic->series }}" placeholder="Inserisci la serie">
                </div>
                <div class="inputGroup">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" name="type" id="type" required>
                        <option selected>Seleziona un tipo</option>
                        <option {{ !isset($comic->type) ? 'selected' : '' }}>Seleziona un tipo</option>
                        <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                </div>
                <div class="inputGroup">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" required maxlength="255"
                        value="{{ $comic->thumb }}" placeholder="Inserisci una descrizione">
                </div>
                <div class="inputGroup">
                    <label for="sale_date" class="form-label">Data di pubblicazione</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" required maxlength="64"
                        value="{{ $comic->sale_date }}" placeholder="Inserisci la data di pubblicazione">
                </div>
                <div class="inputGroup">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" required maxlength="10"
                        value="{{ $comic->price }}" placeholder="Inserisci il prezzo">
                </div>
                <div class="inputGroup">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                        placeholder="Inserisci una descrizione...">{{ $comic->description }}</textarea>
                </div>
            </div>

            <div class="btnContainer">
                <button type="submit" class="ctaBtn">
                    Salva
                </button>
            </div>
        </form>

    </div>
@endsection
