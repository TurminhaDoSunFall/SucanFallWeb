<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhes.css">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Detalhes</title>
</head>
<body>
    <header class="col-12">
        <div class="menu col-2">
            <img src="assets/logo.png" class="image">
        </div>
        <div class="menu col-10">
            <p>DETALHES</p>
        </div>
    </header>  
    <section>
        <!–– Perguntar pro Lázaro sobre como chamar uma imagem ––>
        <img src="assets/imagemdeexemplo.png" height="250px" width="250px"> 
        <h1>{{ config('user.titulo', 'user.nome_user')}}</p>
        <p>{{ config('user.descricao')}}</p>
    </section>
</body>
</html>
