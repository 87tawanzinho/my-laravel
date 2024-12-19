@extends('layouts.main')

@section('title', 'Evento: {{$event->id}}')

@section('content')
<div class="w-full h-full flex flex-col justify-center items-center gap-6 mt-20 px-4">
    <h2 class="text-4xl text-gray-900 font-semibold">Detalhes da chamada para o Discord</h2>
    
    <div class="flex flex-col md:flex-row justify-between items-start gap-6 w-full max-w-6xl bg-white shadow-md rounded-2xl p-6 mt-8 border-t-4 border-blue-500">
        
        <!-- Imagem e Detalhes principais -->
        <div class="w-full md:w-4/12 flex flex-col items-center bg-gray-100 rounded-xl shadow-sm p-4">
            <img src="/img/events/{{$event->image}}" alt="Imagem do Evento" class="rounded-2xl object-top w-full h-64 object-cover mb-4" />
            
            <!-- Main Character Section -->
            <div class="w-full text-center py-2 px-4 rounded-lg bg-blue-600 text-white font-semibold">
                <p>Personagem principal:</p>
                <div class="flex items-center justify-center gap-2">
                    <ion-icon name="game-controller-outline" class="text-2xl"></ion-icon>
                    <p>{{$event->main}}</p>
                </div>
            </div>
            
            <div class="w-full flex flex-col items-center gap-2 mt-4">
                <button class="w-full py-3 px-6 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition-all duration-200">
                    Chamar no Discord <ion-icon name="logo-discord" class="ml-2 text-xl"></ion-icon>
                </button>
                <p class="text-sm text-gray-600 mt-2">Criado por <strong>{{ $eventOwner['name']}}</strong></p>
            </div>
        </div>

        <!-- Detalhes do evento -->
        <div class="w-full md:w-7/12 flex flex-col gap-4">
            <div class="flex items-center gap-2 text-lg font-semibold text-gray-800">
                <ion-icon name="accessibility-outline"></ion-icon>
                <p>{{$event->title}}</p>
            </div>
            
            <div class="flex items-center gap-2 text-lg text-gray-600">
                <ion-icon name="stopwatch-outline"></ion-icon>
                <p>{{$event->description}}</p>
            </div>
             @if ($event->items)
    <div class="w-full max-w-6xl bg-white shadow-md rounded-2xl p-6 mt-44 border-t-4 border-gray-300 ">
        <div class="text-lg font-semibold text-gray-700 flex items-center gap-2">
            <ion-icon name="warning-outline"></ion-icon>
            <p>Itens obrigatórios:</p>
        </div>
        <div class="border rounded-lg mt-3 px-3 py-2 bg-gray-50">
            @foreach ($event->items as $item)
                <div class="text-gray-700 text-sm mb-1">
                    <span class="border-b-2 pb-1">{{$item}}</span>
                </div>
            @endforeach
        </div>
    </div>
    @endif
        </div>
        
    </div>

  
</div>
@endsection
