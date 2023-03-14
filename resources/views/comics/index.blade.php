@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <h1>Tutti i fumetti</h1>

                <a href="{{ route('comics.create') }}" class="btn btn-success">
                    Crea fumetto
                </a>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($comics as $comic)
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="card-title">{{ $comic->title }}</h2>

                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                Vedi dettagli
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection