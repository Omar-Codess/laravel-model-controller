@extends('layouts.app')

@section('title', 'All movies')

@section('content')
    <div class="container">
        <h1>Ecco sono tutti i nostri film</h1>

        <div class="row row-cols-4">
            @foreach ($movies as $movie)
                <div class="col">
                    @include('partials.movie-card')
                </div>
            @endforeach
        </div>

    </div>
@endsection
