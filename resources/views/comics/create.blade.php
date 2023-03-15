@extends('layouts.app')

@section('page_title')
    Add Comic | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">Aggiungi un fumetto</h1>
    <div class="formContainer">

        <form action="{{ route('comics.store') }}" method="POST" class="createForm">
            @csrf

            <div class="inputs">
                <div class="inputGroup">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" required maxlength="64"
                        placeholder="Inserisci il titolo">
                </div>
                <div class="inputGroup">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" required maxlength="64"
                        placeholder="Inserisci la serie">
                </div>
                <div class="inputGroup">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" name="type" id="type" required>
                        <option selected>Seleziona un tipo</option>
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
                <div class="inputGroup">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" required maxlength="255"
                        placeholder="Inserisci una descrizione">
                </div>
                <div class="inputGroup">
                    <label for="sale_date" class="form-label">Data di pubblicazione</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" required maxlength="64"
                        placeholder="Inserisci la data di pubblicazione">
                </div>
                <div class="inputGroup">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" required maxlength="10"
                        placeholder="Inserisci il prezzo">
                </div>
                <div class="inputGroup">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                        placeholder="Inserisci una descrizione..."></textarea>
                </div>
            </div>

            <div>
                <button type="submit" class="ctaBtn">
                    Salva
                </button>
            </div>
        </form>

    </div>
@endsection
