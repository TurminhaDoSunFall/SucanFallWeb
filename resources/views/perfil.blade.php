@extends('./perfil')

@section('content')
olá
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Perfil</title>
</head>
<body>
    <div class ="row">
        <header class="col-12">
            <div class="menu col-2">
                <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
            </div>
            <div class="menu col-8">
                <p style="font-size:3vw">PERFIL</p>
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
    </div>
        </header>  
    <section class="col-12">
        <div class=" textos col-10">
            <form>
                <label>Nome: </label>
                <p class="paragrafo">{{config('user.nome_user')}}></p>
                <br>
                <label>Email: </label>
                <p class="paragrafo">{{config('user.email')}}></p>
                <br>
                <label>Número de Uploads: </label>
                <p class="paragrafo">{{config('user.uploads')}}></p>
            </form>
        </div>
        <div class="col-8">
            <img class="logo" src="{{asset('img/nuvem.png')}}" alt="Logo" class="image">
        </div>
        @yield('content')
    </section>
     
</body>
</html>
