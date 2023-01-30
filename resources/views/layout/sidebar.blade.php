<div class="col-1 d-flex flex-column align-items-stretch flex-shrink-0 bg-white mt-5" style="width: 380px;">
    <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Recent Movies:</span>
    </a>
    <div class="list-group list-group-flush border-bottom scrollarea">
      @foreach ($movies as $movie)
      <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong>{{ $movie->title }}</strong>
        </div>
      </a>
      @endforeach
    </div>
  </div>
