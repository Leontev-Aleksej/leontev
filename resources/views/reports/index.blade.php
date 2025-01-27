<x-app-layout>
<body class="">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
  <a class="" href={{ route('reports.create') }}>Add Report</a>
  <div class="flex gap-20">
    @foreach ($reports as $report)
    <div class="flex flex-col">
    <h5 class="card-title">{{ $report->address }}</h5>
    <p class="card-text">{{ $report->contact }}</p>
    <p class="card-text">{{ $report->date }}</p>
    <p class="card-text">{{ $report->time }}</p>
    <p class="card-text">{{ $report->payment }}</p>
  </div>
  @endforeach
  </div>
</div>
</body>
</x-app-layout>