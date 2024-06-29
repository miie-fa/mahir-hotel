<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.includes')
    @stack('css')
    <title>Hotel Citra Megah | Room Detail</title>
</head>
<body data-bs-spy="scroll" data-bs-target="navbarNav" data-bs-offset="200">
    @include('layout.navbar')

    @yield('content')

    @stack('js')
    @include('layout.footer')
</body>
</html>
