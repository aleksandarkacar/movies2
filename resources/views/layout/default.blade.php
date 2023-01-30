<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    @include('layout.header')
    @include('layout.navbar')
    
    @yield('content')

    @include('layout.footer')
</body>
</html>