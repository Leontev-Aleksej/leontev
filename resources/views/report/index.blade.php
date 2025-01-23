@extends('layouts.main')
@section('content')
<div id="content">
  <div>
    <div>
        <form method="POST" action="{{route('reports.store')}}">
            @csrf
            <input name="address" type="text">
            <input name="contact" type="text">
            <input name="date" type="text">
            <input name="time" type="text">
            <input name="payment" type="text">
            <button type="submit">Создать</button>
          </form>
        </div>
    </div>
</div>
@endsection()