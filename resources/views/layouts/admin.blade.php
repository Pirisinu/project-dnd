<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    {{-- Font Awesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous'/>
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('partials.header')
    <h1>Admin side</h1>

    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.characters.index') }}">Lista Charater</a>
            </li>
            <li>
                <a href="{{ route('admin.characters.create') }}">New Character</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
