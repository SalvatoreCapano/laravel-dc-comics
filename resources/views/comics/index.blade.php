@extends('layouts.app')

@section('page_title')
    All Comics | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">Tutti i fumetti</h1>

    <div class="cardsContainer">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="card-body">
                    <div class="imgContainer">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <h2 class="seriesTitle">{{ $comic->title }}</h2>

                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                        Vedi dettagli
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="btnContainer">
        <a href="{{ route('comics.create') }}" class="ctaBtn">
            Aggiungi fumetto
        </a>
    </div>

@endsection
