<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="">

    @if(session('msg'))
    <p class="p-4 bg-green-400 border"> {{session('msg')}}  </p>
    @elseif(session('error'))
    <p class="p-4 bg-red-400 border"> {{session('error')}}  </p>
    @endif

    <header class="p-6 border-b flex gap-4  justify-between">
        <div class="flex gap-4">
        <a href="/" class='hover:opacity-60 transition-all'>Eventos do Lol</a>
        <a href="events/create" class='hover:opacity-60 transition-all'>Criar Eventos</a>
        </div>
       <div class="flex gap-4">
        <a href="" class='hover:opacity-60 transition-all'>Login</a>
        <a href="" class='hover:opacity-60 transition-all'>Cadastro</a>
       </div>
    </header>

    @yield('content')

    <footer class="fixed bottom-0 p-4 text-center w-full border-t border-white bg-black text-white"> 
        Produzido por Thiago Tawan
    </footer>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>