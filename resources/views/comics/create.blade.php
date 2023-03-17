@extends('layouts.app')

@section('page_title')
    Add Comic | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">Aggiungi un fumetto</h1>

    <div class="goBackBtn">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">
            <i class="bi bi-chevron-left"></i>
            Torna indietro
        </a>
    </div>

    @if ($errors->any())
        <div class="errorContainer">
            <h3>Error !!!</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="formContainer">

        <form action="{{ route('comics.store') }}" method="POST" class="createForm">
            @csrf

            <div class="inputs">
                <div class="inputGroup">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" required maxlength="64"
                        placeholder="Inserisci il titolo" value="{{ old('title') }}">
                </div>
                <div class="inputGroup">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" required maxlength="64"
                        placeholder="Inserisci la serie" value="{{ old('series') }}">
                </div>
                <div class="inputGroup">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" name="type" id="type" required>
                        <option {{ old('type') && old('type') == '' ? 'selected' : '' }}>Seleziona un tipo</option>
                        <option value="comic book" {{ old('type') == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic novel" {{ old('type') == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                </div>
                <div class="inputGroup">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" required maxlength="255"
                        placeholder="Inserisci un url" value="{{ old('thumb') }}">
                </div>
                <div class="inputGroup">
                    <label for="sale_date" class="form-label">Data di pubblicazione</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" required maxlength="64"
                        placeholder="Inserisci la data di pubblicazione" value="{{ old('sale_date') }}">
                </div>
                <div class="inputGroup">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" required maxlength="10"
                        placeholder="Inserisci il prezzo" value="{{ old('price') }}">
                </div>
                <div class="inputGroup">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                        placeholder="Inserisci una descrizione...">{{ old('description') }}</textarea>
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
