@extends('themes.cuba.layout')

@section('title', 'Главная')

@section('content')
    <h1>Bienvenido a Cuba Theme</h1>

    <form action="{{ route('set_theme') }}" method="POST">
        @csrf
        <label for="theme">Seleccione un tema:</label>
        <select name="theme" id="theme">
            <option value="classic" {{ session('theme') == 'classic' ? 'selected' : '' }}>Classic</option>
            <option value="cuba" {{ session('theme') == 'cuba' ? 'selected' : '' }}>Cuba</option>
        </select>
        <button type="submit" class="btn">Guardar</button>
    </form>
@endsection
