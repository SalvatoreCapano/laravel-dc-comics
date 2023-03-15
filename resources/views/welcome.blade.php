@extends('layouts.app')

@section('page_title')
    Home | DC Comics
@endsection

@section('content')
    <h1 class="sectionTitle">DC Comics</h1>

    <div class="btnContainer">
        <a href="{{ route('comics.index') }}" class="ctaBtn">
            Vedi tutti i fumetti
        </a>
    </div>
@endsection
