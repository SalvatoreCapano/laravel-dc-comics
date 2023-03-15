@extends('layouts.app')

@section('content')
    <h1 class="sectionTitle">{{ $comic->title }}</h1>

    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">
            Torna indietro
        </a>
    </div>

    <div class="cardsContainer">

        <div class="card">

           <a href="#">
            <div class="imgContainer">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <h2 class="seriesTitle">{{ $comic->title }}</h2>
           </a>

        </div>
    </div>
@endsection
