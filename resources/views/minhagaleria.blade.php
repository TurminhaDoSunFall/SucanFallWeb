<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/minhagaleria.css">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Minha Galeria</title>
</head>
<body>
  <div class ="row"></div>
    <header class="col-12">
      <div class="menu col-2">
          <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
      </div>
      <div class="menu col-10">
          <p style="font-size:3vw">MINHA GALERIA</p>
      </div>
  </header>  

   <section>
    <div class="Foto2 col-12">
        <img src="{{asset('img/Fotohistoria.png')}}" alt="Fotohistoria">
        <label>Título</label>
        <p class="texto">{{config('user.titulo1')}}</p>
        <p class="paragrafo">{{config('user.descricao1')}}</p>
        <a href="editar.blade.php"> <img src="{{asset('img/Imgeditar.png')}}" alt="Imgeditar"></a>       
    </div>
  </section>
  <br>
  <section>
    <div class="Foto2 col-12">
        <img src="{{asset('img/Fotohistoria.png')}}" alt="Fotohistoria">
        <label>Título</label>
        <p class="texto">{{config('user.titulo2')}}</p>
        <p class="paragrafo">{{config('user.descricao2')}}</p>
        <a href="editar.blade.php"><img src="{{asset('img/Imgeditar.png')}}" alt="Imgeditar"></a>      
    </div>
  </section>
 </body>
</html>
