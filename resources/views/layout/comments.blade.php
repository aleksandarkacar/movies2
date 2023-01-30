
<div class="container">
    <H2>Comments:</H2>
    @foreach ($movie->comments as $comment)
    <div class="row align-items-md-stretch">
        <div class="col-md-12 mt-1">
            <div class="h-100 p-5 text-bg-dark rounded-3">
            <p>{{ $comment->content }}</p>
            <div class="d-flex justify-content-between align-items-center">
                  <small class="text-white">Created at: {{ $comment->created_at }}</small>
              </div>
            </div>
        </div>
        </div>   
    @endforeach
</div>


