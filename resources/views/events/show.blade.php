@extends('layouts.main')

@section('title', 'Evento: {{$event->id}}')

@section('content')
 <div class="w-full h-full flex justify-center gap-4 mt-32 ">
    <div class="flex justify-center gap-48 items-center   rounded-t-3xl  w-9/12 rounded-2xl p-8 border " >
        <div class=" rounded-2xl    text-center">
            <img src="/img/events/{{$event->image}}" class="rounded-2xl h-72 w-72 object-cover object-top" />
            <p class="rounded-2xl m-2 p-2 bg-black text-white">{{$event->main}}</p>
        </div>
        <div class="flex flex-col justify-around h-full w-62">
         <div>
           <div class="flex items-center gap-2"> <ion-icon name="accessibility-outline"></ion-icon>
               <p>{{$event->title}}</p></div>
          <div class="flex items-center gap-2">
                <ion-icon name="stopwatch-outline"></ion-icon>
              <p>{{$event->description}}</p>
              
          </div>

            
            @if ($event->items)
          <div class="flex items-center gap-2 mt-8 text-lg">
              <ion-icon name="warning-outline"></ion-icon>
            <p >Obrigatório:</p>
          </div>
           <div class="border rounded-2xl mt-1 px-1 py-1">
             @foreach ($event->items as $item )
           <div>
             <div>
               
                <span class="border-b">{{$item}}</span>
              
             </div>
           </div>
            @endforeach
           </div>
            @endif
         </div>


            <button class=" mt-4 border p-2 bg-blue-600 text-white w-56 rounded-lg px-4 items-center  justify-between flex">Chamar no Discord <ion-icon name="logo-discord" class="text-xl"></ion-icon></button>
        </div>
    </div>
</div>
@endsection