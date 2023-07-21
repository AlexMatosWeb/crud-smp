<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex items-center justify-center h-screen">
    <h1 class="text-3xl font-bold -mt-0.5 p-3">
    Crud Simple
</h1>
<p>
    @guest
      <a href="{{route('login')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</a>
      <a href="{{route('register')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cadastre-se</a>
    @endguest
        @auth
           <a href="{{route('dashboard')}}" class="px-4 py-3 rounded-ful">Dashboard</a>
        @endauth

</p>
</div>
</body>
</html>
