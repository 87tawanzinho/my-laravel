@extends('layouts.main')

@section('title', 'Eventos Dashboard')

@section('content')
  <div class="w-full flex flex-col items-center justify-center">
    <!-- Imagem de fundo do banner -->
    <img src="/elise-bg.jpg" class="h-96 w-full object-cover object-top shadow-lg">
    <p class="mt-6 text-gray-700 text-xl px-6 md:px-16 text-center">Se conecte com jogadores de LoL no Discord, marque partidas e se divirta.</p>
    
    <!-- Formulário de busca -->
    <form action="/" method="GET" class="w-full flex justify-center mt-8">
      <input 
        name="search" 
        class="outline-none rounded-2xl w-10/12 md:w-4/12 border p-3 text-lg focus:ring-2 focus:ring-blue-500" 
        placeholder="Procurar um Evento.." 
        type="text"
      />
    </form>
  </div>

  <!-- Mensagem de busca -->
  @if ($search)
    <p class="text-2xl mt-12 px-8 text-center">Você está filtrando por: <span class="font-semibold text-blue-600">{{$search}}</span></p>
  @endif

  <!-- Exibição dos eventos -->
  <div class="flex gap-8 justify-center mt-12 flex-wrap px-6">
    @foreach ($events as $event)
      <div class="flex flex-col border rounded-lg bg-white shadow-lg w-full md:w-80 mb-8">
        <!-- Imagem do evento -->
        <div class="flex justify-center mb-4">
          <img src="/img/events/{{$event->image}}" class="w-full h-48 object-cover object-top rounded-t-lg">
        </div>

        <!-- Detalhes do evento -->
        <div class="flex flex-col px-4 py-3">
          <!-- Título do evento -->
          <span class="text-xl font-semibold text-gray-800 mb-2 flex items-center gap-2">
            <ion-icon name="accessibility-outline" class="text-lg text-blue-600"></ion-icon>
            {{$event->title}}
          </span>

          <!-- Descrição do evento -->
          <span class="text-gray-600 text-sm flex items-center gap-2 mb-2">
            <ion-icon name="stopwatch-outline" class="text-lg text-gray-500"></ion-icon>
            {{$event->description}}
          </span>

          <!-- Localização do evento -->
          <span class="text-gray-600 text-sm flex items-center gap-2 mb-4">
            <ion-icon name="notifications-outline" class="text-lg text-gray-500"></ion-icon>
            {{$event->city}}
          </span>

          <!-- Botão para saber mais -->
          <div class="mt-4 w-full text-center">
            <a 
              href="/events/{{$event->id}}" 
              class="inline-block py-2 px-6 bg-blue-600 text-white rounded-2xl text-lg font-semibold hover:bg-blue-700 transition-all duration-200"
            >
              Saber mais
              <ion-icon name="airplane-outline" class="ml-2 text-xl"></ion-icon>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
