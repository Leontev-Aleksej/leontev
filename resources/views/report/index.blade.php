@extends('layouts.main')
@section('content')
<div id="content">
    <div>
        @foreach($reports as $report)
      <div>
        <span>{{$report['number']}}</span>
        <p>{{$report['description']}}</p>
        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
        </form>
      </div>
    @endforeach
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