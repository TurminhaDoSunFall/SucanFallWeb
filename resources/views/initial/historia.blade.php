<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/historia.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropmenu.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Historia</title>
</head>
<body>
  <div class ="row">
  
   <header class="col-12">
      <div class="menu col-2">
          <img src="assets/logo.png" class="image">
      </div>
      <div class="menu col-7">
          <p>HISTÓRIA</p>
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
      <div class="parte1 col-12">
            <img src="assets/Fotohistoria.png">
            <p>O SOL É GRANDE BLABLABLA Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
              sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </section>
    <br>
    <section>
        <div class="parte2 col-12"> 
          <p> O SOL É BOM PARA NÓIS Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <img src="assets/Fotohistoria.png">
        </div>
    </section>
  </div>
</body>
</html>
