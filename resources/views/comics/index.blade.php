@extends('layouts.app')

@section('page_title')
    All Comics | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">Tutti i fumetti</h1>

    <div class="cardsContainer">
        @foreach ($comics as $index => $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">

                    <div class="imgContainer">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <h2 class="seriesTitle">{{ $comic->title }}</h2>

                    <div class="actions">

                        <a href="{{ route('comics.show', $comic->id) }}" class="action show" @click="testFn()">
                            <i class="bi bi-info-square"></i>
                        </a> <!-- /comics.show-->

                        <a href="{{ route('comics.edit', $comic->id) }}" class="action update">
                            <i class="bi bi-pencil"></i>
                        </a> <!-- /comics.edit-->

                        <a class="action delete" @click="openModal = true">
                            <i class="bi bi-trash"></i>
                        </a> <!-- /comics.destroy-->

                        <div class="overlay" v-if="openModal">
                            <div class="modal">
                                <h4>Conferma Eliminazione</h4>
                                <p>Sei sicuro di voler eliminare il fumetto?</p>
                                <div class="buttons">
                                    <button class="action" @click="openModal = false">Annulla</button>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="action delete">
                                            Elimina
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </a> <!-- /comics.show-->
            </div>
        @endforeach
    </div>

    <div class="btnContainer">
        <a href="{{ route('comics.create') }}" class="ctaBtn">
            Aggiungi fumetto
        </a>
    </div>
@endsection
