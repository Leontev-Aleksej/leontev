<x-app-layout>
<div>
    <div>
      <div>
        <h3>Add a Report</h3>
        <form action="{{ route('reports.store') }}" method="POST">
          @csrf
          <div>
            <textarea id="address" name="address" rows="1" required></textarea>
            <textarea id="contact" name="contact" rows="1" required></textarea>
            <input id="date" name="date" type="date" required/>
            <input id="time" type="time" name="time">
            {{-- <input type="text" list="cleaning" id="payment" name="payment">
            <datalist id="cleaning">
              <option value="генеральная уборка">
              <option value="общий клининг">
              <option value="послестроительная уборка">
              <option value="химчистка ковров и мебели">
            </datalist> --}}
              <select id="payment" name="payment" required>
                  <option value='Наличный'>Наличный</option>
                  <option value='Безналичный'>Безналичный</option>
                  <option value='Частичный'>Частичный</option>
              </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Create Report</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>  