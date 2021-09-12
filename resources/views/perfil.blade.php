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
                <img src="assets/logo.png" class="image">
            </div>
            <div class="menu col-10">
                <p>PERFIL</p>
            </div>
         </header>

    <div class=" textos col-10">
         <form>
            <label>Nome: </label>
            <p class="paragrafo">{{config('user.nome_user')}}</p>
            <br>
            <label>Email: </label>
            <p class="paragrafo">{{config('user.email')}}</p>
            <br>
            <label>Número de Uploads: </label>
            <p class="paragrafo">{{config('user.uploads')}}</p>
        </form>
        </div>
    </div>
    <div class="col-8">
        <img class="logo" src="assets/nuvem.png" class="image">
    </div>
     
</body>
</html>