@extends('layouts.main')

@section('title', 'Criar Novo Evento')

@section('content')
    <div class="flex flex-col items-center mt-24">
        <div class="border w-max p-8 rounded-2xl">
            <h1 class="text-2xl text-black border-b mb-4">Criar um Novo Evento</h1>
            <form action="/events" method="POST" enctype="multipart/form-data" class="flex flex-col mt-4 gap-2">
                @csrf
                <input type="file" id="image" name="image"/>
                <input placeholder="Seu main" type="text" name="main" id="search-campeao" class='p-2 border rounded-lg'/>
                <ul id="campeao-list" class=" mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto hidden z-10"></ul>
                <input placeholder="Titulo" name="title" class='p-2 border rounded-lg'/>
                <input placeholder="Descrição" name="description" class='p-2 border rounded-lg'/>
                <input placeholder="Cidade" name="city" class='p-2 border rounded-lg'/>
    
                <p class="mt-8">O evento é privado?</p>
                <select name="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>

                <div class="flex gap-2 mt-8 mb-4">
                    <div> <input type="checkbox" name="items[]" value="Necessita Pc Bom" /> Necessita Pc Bom</div>
                    <div> <input type="checkbox" name="items[]" value="Internet Boa" /> Internet Boa</div>
                    <div> <input type="checkbox" name="items[]" value="Comprovação Anti Hack" /> Comprovação Anti Hack</div>
                    <div> <input type="checkbox" name="items[]" value="Sem Voip" /> Sem Voip</div>
                </div>

                <input type="submit" class="hover:opacity-60 transition-all bg-blue-600 text-white p-2 border mt-4 rounded-2xl cursor-pointer" />
            </form>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#search-campeao').on('keyup', function() {
        let query = $(this).val();
        if (query.length >= 2) {
            $.ajax({
                url: '{{ route("search.champions") }}',
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    $('#campeao-list').empty();
                    if (data.length > 0) {
                        data.forEach(function(campeao) {
                            $('#campeao-list').append(
                                '<li class="p-2 cursor-pointer hover:bg-blue-100 border-b border-gray-200 rounded-lg transition-all">' + campeao.name + '</li>'
                            );
                        });
                        $('#campeao-list').removeClass('hidden');
                    } else {
                        $('#campeao-list').append('<li class="p-2">Nenhum campeão encontrado.</li>');
                    }
                },
                error: function() {
                    $('#campeao-list').empty().append('<li class="p-2">Erro ao carregar campeões.</li>');
                }
            });
        } else {
            $('#campeao-list').empty().addClass('hidden');
        }
    });

    $(document).on('click', '#campeao-list li', function() {
        $('#search-campeao').val($(this).text());
        $('#campeao-list').empty().addClass('hidden');
    });
});
</script>
