@extends('layout.default')
@section('content')
<main class="container">

    <div class="container" style="margin-top: 5rem">

        <h1>Add new Movie</h1>

<form action="{{ url('createmovie') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Enter Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Enter Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" placeholder="genre" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Enter Director</label>
        <input type="text" class="form-control" id="director" name="director" placeholder="director" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Enter Release date</label>
        <input type="date" class="form-control" id="releasedate" name="releasedate" placeholder="releasedate" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Enter Storyline</label>
        <textarea class="form-control" id="storyline" name="storyline" placeholder="storyline" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Movie</button>
</form>

</div>

@include('layout.handlers');

</main>
@stop