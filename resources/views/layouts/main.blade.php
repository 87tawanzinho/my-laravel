<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="bg-gray-50 font-roboto pb-24">

    <!-- Mensagens de sucesso/erro -->
    @if(session('msg'))
    <div class="p-4 bg-green-500 text-white text-center font-semibold rounded-md shadow-md mb-4">
        {{ session('msg') }}
    </div>
    @elseif(session('error'))
    <div class="p-4 bg-red-500 text-white text-center font-semibold rounded-md shadow-md mb-4">
        {{ session('error') }}
    </div>
    @endif

    <!-- Cabeçalho -->
    <header class="p-6 bg-white shadow-md flex items-center justify-between border-b">
        <div class="flex items-center gap-4">
            <p class="flex gap-2 items-center text-2xl text-blue-800 font-semibold">
                <ion-icon name="logo-discord" class="text-3xl"></ion-icon> 
                <span class="text-green-700">League of Legends |</span>
            </p>
            <nav class="space-x-6">
                <a href="/" class="hover:text-blue-600 transition-all">Eventos do LoL</a>
                <a href="/events/create" class="hover:text-blue-600 transition-all">Criar Eventos</a>
            </nav>
        </div>

        <!-- Área de login e perfil -->
        <div class="flex gap-6 items-center">
            @auth
            <a href="/dashboard" class="text-gray-800 hover:text-blue-600 transition-all">Meu Perfil</a>
            <form class="inline" action="/logout" method="POST">
                @csrf
                <button type="submit" class="text-red-600 hover:text-red-800 transition-all">Sair</button>
            </form>
            @endauth

            @guest
            <a href="/login" class="text-gray-800 hover:text-blue-600 transition-all">Login</a>
            <a href="/register" class="text-gray-800 hover:text-blue-600 transition-all">Cadastro</a>
            @endguest
        </div>
    </header>

    <!-- Conteúdo -->
    <main>
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="fixed bottom-0 w-full bg-black text-white py-4 mt-4">
        <div class="flex justify-center items-center gap-2">
            <ion-icon name="logo-discord" class="text-2xl"></ion-icon>
            <span>League of Legends</span>
        </div>
    </footer>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
