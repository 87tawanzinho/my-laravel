@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

@if(count($events) > 0)

    <div class="mt-12 flex-col items-center flex justify-center px-4">
        <h2 class="text-3xl font-semibold text-center mb-8 text-gray-800">Meus Eventos</h2>
        
        <!-- Container para os eventos -->
        <div class="w-full gap-8 flex flex-wrap justify-center">

            @foreach ($events as $event)
            <div class="bg-white rounded-lg  shadow-lg overflow-hidden transform transition duration-300 w-[28rem] mt-8npm install jquery-typeahead  hover:scale-105 hover:shadow-xl">
                <!-- Imagem do evento -->
                <img src="/img/events/{{$event->image}}" class="w-full h-72 object-cover  rounded-t-lg  object-top" />
                
                <div class="p-6">
                    <!-- Título do evento -->
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">{{$event->title}}</h3>

                    <!-- Ações do evento -->
                    <div class="flex items-center justify-between gap-4 mt-6">
                        <!-- Ver Detalhes -->
                        <a href="/events/{{$event->id}}" class="w-full text-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Ver Detalhes
                        </a>

                        <!-- Deletar Evento -->
                        <form class="w-full text-center bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300" action="/deleteEvent/{{$event->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="w-full">Deletar</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@else
    <div class="text-center mt-8">
        <p class="text-lg text-gray-600">Você ainda não possui eventos</p>
       <a href="/events/create">
         <button class="mt-6 bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600 transition duration-300">Criar Evento</button>
       </a>
    </div>
@endif

@endsection
