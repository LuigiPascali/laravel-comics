<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css/js --}}
    @vite(['resources/js/app.js'])

    <title> Laravel Comics | @yield('page-title')</title>
</head>
<body>
    
    @include('partials.header')

    
    @include('partials.jumbotron2')

    @yield('main')

    @include('partials.footer')
    
</body>
</html>