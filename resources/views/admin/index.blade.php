<h1>Админ панель</h1>
<x-app-layout>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <div class="justify-end ">
            <div class="col ">
              <a class="btn btn-sm btn-success" href={{ route('reports.create') }}>Add Report</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="w-full max-w-96 flex">
        <div class="row">
          @foreach ($reports as $report)
            <div class="">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">{{ $report->address }}</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">{{ $report->contact }}</p>
                  <p class="card-text">{{ $report->date }}</p>
                  <p class="card-text">{{ $report->time }}</p>
                  <p class="card-text">{{ $report->payment }}</p>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm">
                      
                
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </body>
    </x-app-layout>