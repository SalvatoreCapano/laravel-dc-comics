@extends('layouts.app')

@section('content')
    <div class="row">
        
            <h1 class="sectionTitle">Tutti i fumetti</h1>

            <a href="{{ route('comics.create') }}" class="btn btn-success">
                Crea fumetto
            </a>
        
    </div>
    <div class="row">
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
@endsection
