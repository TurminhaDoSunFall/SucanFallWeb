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
  <div class ="row">
  
   <header class="col-12">
      <div class="menu col-2">
          <img src="assets/logo.png" class="image">
      </div>
      <div class="menu col-10">
          <p>MINHA GALERIA</p>
      </div>
   </header>

   <section>
    <div class="Foto1 col-12">
        <img src="assets/Fotohistoria.png">
        <label class="textos">Título</label>
        <p class="paragrafo">{{config('user.title1')}}</p>
       <button>
         <img class="editarimg" src="assets/Imgeditar.png">
       </button>
            
    </div>
  </section>
  <br>
  <section>
    <div class="Foto1 col-12">
      <img src="assets/Fotohistoria.png">
      <label>Título</label>
      <p class="paragrafo">{{config('user.title2')}}</p>
     <button>
       <img class="editarimg" src="assets/Imgeditar.png">
     </button>
  </section>