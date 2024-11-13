@extends('themes.classic.layout')

@section('title', 'Главная')

@section('content')
    <h1>Добро пожаловать в Classic Theme</h1>

    <form action="{{ route('set_theme') }}" method="POST">
        @csrf
        <label for="theme">Выберите тему:</label>
        <select name="theme" id="theme">
            <option value="classic" {{ session('theme') == 'classic' ? 'selected' : '' }}>Classic</option>
            <option value="cuba" {{ session('theme') == 'cuba' ? 'selected' : '' }}>Cuba</option>
        </select>
        <button type="submit" class="btn">Сохранить</button>
    </form>
@endsection
