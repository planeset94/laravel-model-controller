@extends('layout.app')
@section('title', 'Home Movies')
@section('content')

    <div class="container">
        @foreach ($movies as $index => $item)
            <div class="card {{ $index % 2 == 0 ? 'odd' : 'even' }}">
                <h2 class="title">Titolo: {{ $item->title }}</h2>
                <h3 class="original-title">Titolo Originale: {{ $item->original_title }}</h3>
                <p class="nationality">Nazionalit√†: {{ ucfirst($item->nationality) }}</p>
                <p class="date">Anno: {{ $item->date }}</p>
                <p class="vote">Voto: {{ $item->vote }}</p>
            </div>
        @endforeach
    </div>



@endsection
