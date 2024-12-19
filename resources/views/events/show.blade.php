@extends('layouts.main')

@section('title', 'Evento: {{$event->id}}')

@section('content')
 <div class="w-full h-full flex justify-center gap-4 mt-72 ">
    <div class="flex justify-center gap-24 items-center  max-w rounded-2xl p-8 border">
        <div>
            <img src="/img/events/{{$event->image}}" />
        </div>
        <div>
            <p>{{$event->title}}</p>
            <p>{{$event->description}}</p>
            <button class="border bg-blue-600 text-white w-full rounded-lg px-4 mt-4">Go Zap</button>
        </div>
    </div>
</div>
@endsection