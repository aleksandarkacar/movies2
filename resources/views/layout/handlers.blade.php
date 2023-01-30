@if ($errors->any())

    <div class="container" style="margin-top: 2rem">
        <ul style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">*{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

@if (session('status'))
<div class="container" style="margin-top: 2rem">
    <ul style="list-style: none;" class="alert alert-success">
        {{ session('status') }}
    </ul>
</div>
@endif