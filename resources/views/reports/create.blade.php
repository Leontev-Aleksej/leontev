<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
    <div>
      <div>
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Создание запроса</h3>
        <form action="{{ route('reports.store') }}" method="POST">
          @csrf
          <div class="flex flex-col justify-between p-4 leading-normal">
            <p>Адрес:</p>
            <textarea id="address" name="address" rows="1" required></textarea>
            <p>Контакты:</p>
            <textarea id="contact" name="contact" rows="1" required></textarea>
            <p>Дата:</p>
            <input id="date" name="date" type="date" required/>
            <p>Время:</p>
            <input id="time" type="time" name="time">
            <p>Вид услуги</p>
            <select id="service" name="service" required>
              @foreach($services as $service)
              <option value='{{$service->id}}'>{{$service->title}}</option>
              @endforeach
            </select>
            {{-- <input type="text" list="cleaning" id="payment" name="payment">
            <datalist id="cleaning">
              <option value="генеральная уборка">
              <option value="общий клининг">
              <option value="послестроительная уборка">
              <option value="химчистка ковров и мебели">
            </datalist> --}}
            <p>Способ оплаты:</p>
              <select id="payment" name="payment" required>
                  <option value='Наличный'>Наличный</option>
                  <option value='Безналичный'>Безналичный</option>
                  <option value='Частичный'>Частичный</option>
                  
              </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Отправить запрос</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>  