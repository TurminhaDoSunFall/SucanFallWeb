@extends('./cadastrofoto')

@section('content')
olá
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <link rel="stylesheet" href="css/cadastrofoto.css">
    <title>Cadastro Foto</title>
</head>
<body>
    <header class="col-12">
        <div class="menu col-2">
            <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
        </div>
        <div class="menu col-8">
            <p style="font-size:3vw">CADASTRAR PÔR DO SOL</p>
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
        <div class="row ptx">
            <div class=”col-2”></div>
            <div class=”col-8”>
                <form action="/action_page.php">
                    <label for="titulo">Título:</label><br>
                    <input type="text" id="titulo" name="titulo" value="O Sol da Alma"><br>
                    <img src="{{asset('img/camera.png')}}" alt="Camera" for="myfile" class="camerazinha">
                    <label for="myfile" class="label" style="font-size:1,5vw">Envie a foto</label>
                    <input type="file" src="assets/camera.png" id="myfile" name="myfile"><br><br>
                    <label for="descricao">Descrição: </label><br>
                    <input type="text" id="descricao" name="descricao" value="Lindo"><br><br>
                    <input type="submit" value="Submit" >
                </form>
            </div>
            <div class=”col-2”>	
            </div>
        </div>  
    </section>
    @yield('content')
</body>
</html>
