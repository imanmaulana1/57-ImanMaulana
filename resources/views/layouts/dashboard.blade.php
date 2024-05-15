<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        @include('includes.header')
    </header>
    <div class="sidebar">
        @include('includes.sidebar')
    </div>
    <main>
        <div class="content">
            @yield('content')
        </div>
    </main>

</body>

</html>
