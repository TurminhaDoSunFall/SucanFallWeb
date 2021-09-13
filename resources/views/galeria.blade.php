<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/galeria.css">
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
        <div class="menu col-10">
            <p style="font-size:3vw">GALERIA</p>
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
</body>
</html>
