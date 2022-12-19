<div class="card">
    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
        <li class="list-group-item">Date: {{ $movie->date }}</li>
        <li class="list-group-item">Vote: {{ $movie->vote }}</li>
    </ul>
    <div class="card-body">
        <a href="{{ route('movies.show', $movie->id) }}" class="card-link">Dettagli</a>
    </div>
</div>
