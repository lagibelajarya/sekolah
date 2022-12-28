<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('./css/main.css') }}">
    <link rel="shortcut icon" href="{{asset('./img/logo.png')}}" type="image/x-icon">
    <title>Sekolah</title>
</head>

<body>
    @include('layout.header')

    @yield('content')
    @include('layout.footer')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script src="{{ asset('./js/script.js') }}"></script>
    @yield('js')
</body>

</html>
