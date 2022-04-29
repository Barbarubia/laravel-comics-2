<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titolo dinamico -->
    <title>Laravel Comics - @yield('title')</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <!-- Header uguale per tutte le routes del sito -->
    @include('partials.header')

    <!-- Sezione jumbotron -->
    @include('partials.jumbotron')

    <!-- Contenuto dinamico in base alla route in cui mi trovo-->
    <main>
    @yield('content')
    </main>

    <!-- Footer uguale per tutte le routes del sito -->
    @include('partials.footer')

</body>
</html>
