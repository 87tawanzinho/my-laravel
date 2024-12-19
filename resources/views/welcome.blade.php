@extends('layouts.main')
@section('title', 'Eventos Dashboard')


@section('content')
    <div class="w-full flex flex-col items-center justify-center ">
        <img src="/elise-bg.jpg" class=" h-96 w-full object-cover object-top   ">
      <form action="/" method="GET" class="w-full flex justify-center">
          <input name="search"  class="outline-none  mt-4 rounded-2xl w-4/12 border mx-4 p-2"  placeholder="Procurar um Evento.." />
      </form>
    </div>

    
       @if ($search)
      <p class="text-2xl mt-12 px-24">Você está no modo filtragem: {{$search}}</p>
    @endif

  <div class="flex gap-3 justify-center mt-12 " >
    
 
    @foreach ($events as $event)
    
    <div class="flex flex-col border w-80 rounded-lg box-shadow z-50 bg-white">
      <div class="flex justify-center mb-8">
          <img src="/img/events/{{$event->image}}" class="w-full h-48 object-cover  object-top rounded-lg">
      </div>
     <div class="flex flex-col px-2 ">
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