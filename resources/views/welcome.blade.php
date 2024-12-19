@extends('layouts.main')
@section('title', 'Eventos Home')


@section('content')
    <div class="w-full flex justify-center ">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/7b058bea-62a2-44e0-9d22-173cee5824f5/dcr4qmu-413b59d9-cf7c-4894-92c8-554aa92001e5.png/v1/fill/w_1000,h_361,q_80,strp/k_da_akali___twitter_banner_by_kirapwns_dcr4qmu-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MzYxIiwicGF0aCI6IlwvZlwvN2IwNThiZWEtNjJhMi00NGUwLTlkMjItMTczY2VlNTgyNGY1XC9kY3I0cW11LTQxM2I1OWQ5LWNmN2MtNDg5NC05MmM4LTU1NGFhOTIwMDFlNS5wbmciLCJ3aWR0aCI6Ijw9MTAwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.MVIO47SLCok-9xuViLBiXqhcicQqKkKYLEw_1UMgwo4" class=" h-96 rounded-2xl border-gray-400 border-4 mt-8 ">
    </div>
  <div class="flex gap-3 justify-center mt-12 ">
    @foreach ($events as $event)
    <div class="flex flex-col border w-80 rounded-lg box-shadow">
      <div class="flex justify-center my-4">
          <img src="/img/events/{{$event->image}}" class="w-48 rounded-lg">
      </div>
     <div class="flex flex-col px-2 py-2">
     <span class="border-b mb-2">
     <ion-icon name="accessibility-outline"></ion-icon>
     {{$event->title}}
    </span>
      <span>
        <ion-icon name="stopwatch-outline"></ion-icon>
      {{$event->description}}
    </span>
      <span>
      <ion-icon name="notifications-outline"></ion-icon>
      {{$event->city}}
    </span>
     <div  class="p-2 bg-blue-600 mt-4 w-full  text-white rounded-2xl flex items-center justify-between"> <a href="/events/{{$event->id}}">Saber mais</a>
      <ion-icon name="airplane-outline" class="text-xl"></ion-icon></div>
     </div>
    </div>
  @endforeach
  </div>
@endsection