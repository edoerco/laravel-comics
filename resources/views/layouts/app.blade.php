<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title') | My first layout Laravel</title>
</head>
<body>
    {{-- importo l'header --}}
    @include('partials.header')

    <main>
        @yield('current-series')
        @yield('more-comics')
        @yield('fumetti')
    </main>

    {{-- importo il footer --}}
    @include('partials.footer')
</body>
</html>