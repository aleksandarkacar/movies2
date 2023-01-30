@extends('layout.default')
@section('content')
<main class="container">

  
<main role="main">
  
  
  <div class="album py-5 bg-light">
    <div class="container">
      
      <div class="row">
        
        <div class="px-4 py-5 my-5 text-center">
          <div class="d-flex justify-content-between align-items-center">
            <h1>{{ $movie->title }}</h1>
            <a type="button" href="/genres/{{ $movie->genre }}" class="btn btn-sm btn-outline-secondary">Genre:{{ $movie->genre }}</a>
          </div>
          
          <p class="container">{{ $movie->storyline }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <h5>Director: {{ $movie->director }}</h5>
            
              <small class="text-muted">Release date: {{ $movie->releasedate }}</small>
          </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
    
  @include('layout.comments')  
  @include('createcomment')      

</main>
@stop