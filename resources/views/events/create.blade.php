@extends('layouts.main')

@section('title', 'Criar Novo Evento')

@section('content')
    <div class="flex flex-col items-center  mt-24 ">
        <div class="border w-max p-8 rounded-2xl">
            <h1 class="text-2xl text-black border-b mb-4">Criar um Novo Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data" class="flex flex-col  mt-4 gap-2">
            @csrf
            <input type="file" id="image" name="image"/>
            <input placeholder="Titulo" name="title" class='p-2 border rounded-lg' />
            <input placeholder="Descrição" name="description" class='p-2 border rounded-lg' />
            <input placeholder="Cidade"  name="city" class='p-2 border rounded-lg' />
    
            <p class="mt-4">O evento é privado?</p>
            <select name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
    
            <input type="submit" class="hover:opacity-60 transition-all  bg-blue-600 text-white p-2 border mt-4 rounded-2xl cursor-pointer" />
        </form>
        </div>
    </div>
@endsection