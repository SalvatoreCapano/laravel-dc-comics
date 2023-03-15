@extends('layouts.app')

@section('page_title')
    All Comics | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">Tutti i fumetti</h1>

    <div class="cardsContainer">
        @foreach ($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">

                    <div class="imgContainer">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <h2 class="seriesTitle">{{ $comic->title }}</h2>

                    <div class="actions">

                        <a href="{{ route('comics.show', $comic->id) }}" class="action show">
                            <i class="bi bi-info-square"></i>
                        </a> <!-- /comics.show-->

                        <a href="{{ route('comics.show', $comic->id) }}" class="action update">
                            <i class="bi bi-pencil"></i>
                        </a> <!-- /comics.show-->

                        {{-- <a href="{{ route('comics.show', $comic->id) }}" class="action delete">
                            <i class="bi bi-trash"></i>
                        </a> --}}

                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button type="submit" class="action delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form> <!-- /comics.destroy-->

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
