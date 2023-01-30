
<form action="{{ url('createcomment') }}" method="POST">
    @csrf

    <div class="mb-3 mt-3">
        <label class="form-label">Add Comment</label>
        <textarea type="text" class="form-control" id="content" name="content" placeholder="Enter Comment"></textarea>
        <input type="hidden" id="movie_id" name="movie_id" value="{{ $movie->id }}"required> 
    </div>

    <button type="submit" class="btn btn-primary">Post Comment</button>
</form>

@include('layout.handlers')