<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/creditos.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropmenu.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Créditos</title>
</head>
<body>
    <header class="col-12">
        <div class="menu col-2">
            <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
        </div>
        <div class="menu col-7">
            <p style="font-size:3vw">CRÉDITOS</p>
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
    <section>
        <p>Isis S. P.</p>
        <p>João Marcos S. H.</p>
        <p>Pedro Luis C.</p><br>
        <p>----------------</p>
        <p>CEFET-MG</p>
        <p>2021</p><br><br>
        <p>Agradecimentos</p>
        <p>Lazin</p>
        <p>O Sol</p>
        <p>O galo do vizinho do Pedro</p>
        <p>Nossas mães</p>
        <p>E os pais também</p>
        <p>(Pra não ter ciúme)</p>
        <img src="{{asset('img/logo.png')}}" alt="Logo">
    </section>
</body>
</html>
