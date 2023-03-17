@extends('layouts.app')

@section('page_title')
    {{ $comic->title }} | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">{{ $comic->title }}</h1>

    <div class="goBackBtn">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">
            <i class="bi bi-chevron-left"></i>
            Torna indietro
        </a>
    </div>

    <div class="showCard">
        {{-- <div class="cardsContainer"> --}}
    
            <div class="card">
    
               <a href="#">
                <div class="imgContainer">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <h2 class="seriesTitle">{{ $comic->title }}</h2>
               </a>
    
            </div>
        {{-- </div> --}}

        <div class="descriptionContainer">
            <h3>Trama</h3>
            <p>
                {{ $comic['description'] }}
            </p>
        </div>

    </div>

@endsection
