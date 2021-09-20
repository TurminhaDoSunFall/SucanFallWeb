@extends('./galeria')

@section('content')
olá
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/galeria.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropmenu.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Galeria</title>
</head>
<body>
    <header class="col-12">
        <div class="menu col-2">
            <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
        </div>
        <div class="menu col-8">
            <p style="font-size:3vw">GALERIA</p>
        </div>
        <div class="menu col-1">
        <div class="dropdown">
            <button class="dropbtn">MENU</button>
            <div class="dropdown-content">
                <a href="/">INICIO</a>
                <a href="/Detalhes">DETALHES</a>
                <a href="/Galeria">GALERIA</a>
                <a href="/Minhagaleria">MINHA GALERIA<a>
                <a href="/Editar">EDITAR<a>
                <a href="/Creditos">CREDITOS</a>
                <A HREF="/Config">CONFIGURAÇÕES</a>
            </div>
        </div>
      </div>
        <div class="col-2">
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/Usuario') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
    </header>  
    <section class="col-12">
        <div class="parte col-12">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo" height="auto" width="auto" max-width="300px" max-height="300px">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo" height="auto" width="auto" max-width="300px" max-height="300px">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo" height="auto" width="auto" max-width="300px" max-height="300px"> 
        </div>
        <div class="parte col-12">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo" height="auto" width="auto" max-width="300px" max-height="300px">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo" height="auto" width="auto" max-width="300px" max-height="300px">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo" height="auto" width="auto" max-width="300px" max-height="300px"> 
        </div>
    </section>
    @yield('content')
</body>
</html>
