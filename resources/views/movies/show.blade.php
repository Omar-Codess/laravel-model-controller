@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container">
        <h2>Dettagli del film: {{ $movie->title }}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius enim dolorum blanditiis autem cupiditate totam,
            obcaecati facere explicabo esse. Magni quae nam assumenda aliquid quisquam sunt quis adipisci non explicabo.</p>
    </div>
@endsection
