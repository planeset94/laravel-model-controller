@extends('layout.app')
@section('title', 'Home Movies')
@section('content')

    <div class="container">
        @foreach ($movies as $item)
            <div class="card">
                <h2 class="title">Titolo: {{ $item->title }}</h2>
                <h3 class="original-title">Titolo Originale: {{ $item->original_title }}</h3>
                <p class="nationality">Nazionalità: {{ ucfirst($item->nationality) }}</p>
                <p class="date">Anno: {{ $item->date }}</p>
                <p class="vote">Voto: {{ $item->vote }}</p>
            </div>
        @endforeach
    </div>



@endsection
