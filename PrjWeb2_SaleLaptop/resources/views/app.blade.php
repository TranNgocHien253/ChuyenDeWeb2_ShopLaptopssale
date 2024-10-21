<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yield</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('Header.header')
    <div class="container mx-auto px-4 mt-5">
        @yield('content')
    </div>
</body>

</html>