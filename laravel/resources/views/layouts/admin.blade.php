<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
@include('partials.header')

@include('partials.sidebar')

@yield('content')

@include('partials.footer')
</body>
@include('partials.script')
</html>
