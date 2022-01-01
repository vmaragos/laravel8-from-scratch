<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<body>
    {{-- @yield('content') --}}
    {{$slot}}
</body>