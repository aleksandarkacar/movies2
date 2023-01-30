@extends('layout.defaultWithSidebar')

@section('content')
<div class="container">
    <main style="margin-top: 2rem">
    <div class="album py-5 bg-light">
        <div class="container">
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>{{ $movie->title }}</h1>
                                <a type="button" href="/genres/{{ $movie->genre }}" class="btn btn-sm btn-outline-secondary">Genre:{{ $movie->genre }}</a>
                            </div>
                            <p class="card-text">{{ Str::limit($movie->storyline, 200, '...') }}</p>
                            <h6>Director: {{ $movie->director }}</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a type="button" href="/movies/{{ $movie->id }}" class="btn btn-sm btn-outline-secondary">View Movie</a>
                                </div>
                                <small class="text-muted">Release date: {{ $movie->releasedate }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
</div>
@stop