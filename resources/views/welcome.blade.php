@extends('layouts.main')
@section('title', 'Eventos Home')


@section('content')
    <div class="w-full flex justify-center ">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/7b058bea-62a2-44e0-9d22-173cee5824f5/dcr4qmu-413b59d9-cf7c-4894-92c8-554aa92001e5.png/v1/fill/w_1000,h_361,q_80,strp/k_da_akali___twitter_banner_by_kirapwns_dcr4qmu-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MzYxIiwicGF0aCI6IlwvZlwvN2IwNThiZWEtNjJhMi00NGUwLTlkMjItMTczY2VlNTgyNGY1XC9kY3I0cW11LTQxM2I1OWQ5LWNmN2MtNDg5NC05MmM4LTU1NGFhOTIwMDFlNS5wbmciLCJ3aWR0aCI6Ijw9MTAwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.MVIO47SLCok-9xuViLBiXqhcicQqKkKYLEw_1UMgwo4" class=" h-96 rounded-2xl border-gray-400 border-4 mt-8 ">
    </div>
  <div class="flex gap-3 justify-center mt-12 ">
    @foreach ($events as $event)
    <div class="flex flex-col border w-72 rounded-lg box-shadow">
      <div class="flex justify-center my-4">
          <img src="https://imgcdn.stablediffusionweb.com/2024/3/20/8e091faa-20bc-414d-80a1-c8ad3609fd87.jpg" class="w-48 rounded-lg">
      </div>
      <span>{{$event->title}}</span>
      <span>{{$event->description}}</span>
      <span>{{$event->city}}</span>
    </div>
  @endforeach
  </div>
@endsection