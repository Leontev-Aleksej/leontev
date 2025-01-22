@extends('layouts.main')
@section('content')

<form method="POST" action="{{route('reports.update', $report->id)}}">
    @csrf
    @method('put')
    <input name="address" type="text">
    <input name="contact" type="text">
    <input name="date" type="text">
    <input name="time" type="text">
    <input name="payment" type="text">
    <button type="submit">Обновить</button>
  </form>
