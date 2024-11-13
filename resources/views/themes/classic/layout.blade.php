<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classic Theme - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('classic/style.css') }}">
</head>
<body>
<header>
    <nav>
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('contacts') }}">Контакты</a>
    </nav>
</header>

<div class="content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

@stack('scripts')
</body>
</html>
