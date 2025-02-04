<h1 class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">Админ панель</h1>
<x-app-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px] ">
    <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{ route('reports.create') }}>Создать запрос</a>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 p-4 place-items-center">
          @foreach ($reports as $report)
          <div class="flex flex-col mt-4">
                  <h5 class="mb-2 text-xl font-medium leading-tight">{{ $report->address }}</h5>
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->contact }}</p>
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->date }}</p>
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->time }}</p>
                  @foreach($services as $service)
                  @if($service->id==$report->service_id)
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{$service->title}}</p>
                  @endif
                  @endforeach
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->payment }}</p>
                  {{-- <form action="{{route('reports.update', $report->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                      <input type="hidden" name="id" value="{{$report->id}}">
                      <select name="status" onchange="document.getElementById('form-update-{{$report->id}}').submit()" class="mt-2">
                          <option value='Новая'>Новая</option>
                          <option value='Оказана'>Оказана</option>
                          <option value='Отменена'>Отменена</option>
                      </select>
                  </form> --}}
                  @if($report->status=="новая")
                  <form id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
                  @csrf
                  @method('PUT')
                      <input type="hidden" name="id" value="{{$report->id}}">
                      <select name="status" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
                          <option value='Новая'>Новая</option>
                          <option value='Оказана'>Оказана</option>
                          <option value='Отменена'>Отменена</option>
                      </select>
                  </form>
                  @else
                    <p>{{$report->status}}</p>
                  @endif
            </div>
          @endforeach
        </div>
      </div>
    </x-app-layout>