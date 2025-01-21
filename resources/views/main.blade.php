@extends('layouts.main')
@section('content')
<nav>
    <ul>
        <li><a href="{{ route('home') }}">Главная</a></li>
        <li><a href="{{ route('array') }}">Массивы</a></li>
        <li><a href="{{ route('report.index') }}">Репорты</a></li>
    </ul>
</nav>
<div id="content">
    <h1>Добро пожаловать на наш сайт!</h1>
    <img src="/resources/img/9oiaEmBgRh8.jpg" alt="Картинка">
    <p>
        Это текст о рыбах. Рыбы — это водные позвоночные, которые могут жить в пресной или соленой воде. 
        Они имеют множество форм и размеров, от крошечных гуппи до огромных акул. 
        Рыбы играют важную роль в экосистемах и являются важным ресурсом для людей.
    </p>
</div>
@endsection()