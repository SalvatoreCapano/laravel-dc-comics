@extends('layouts.app')

@section('page_title')
    Home | DC Comics
@endsection

@section('content')
    {{-- <section class="contentSection"> --}}

        

        {{-- <div class="container"> --}}

            <h1 class="sectionTitle">DC Comics</h1>
    
            {{-- @foreach ($comics as $comic)
                                {{ $comic['title'] }}
                            @endforeach --}}
    
            <a href="{{ route('comics.index') }}" class="actionBtn">
                Vedi tutti i fumetti
            </a>

        {{-- </div> --}}

    {{-- </section> --}}
@endsection