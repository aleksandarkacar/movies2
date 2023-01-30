<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 px-1 bg-dark position-fixed" id="sticky-sidebar">
                @include('layout.sidebar')
            </div>
            <div class="col offset-3" id="main">
                @include('layout.navbar')

                @yield('content')


                @include('layout.footer')
            </div>
        </div>
    </div>
</body>
</html>