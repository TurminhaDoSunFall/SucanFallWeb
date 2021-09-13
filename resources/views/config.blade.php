<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <link rel="stylesheet" href="css/config.css">
    <title>Configurações</title>
</head>
<body>
    <header class="col-12">
        <div class="menu col-2">
            <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
        </div>
        <div class="menu col-10">
            <p style="font-size:3vw">CONFIGURAÇÕES</p>
        </div>
    </header>  
    <nav>
        <div class="alo col-12">
            <label for="viverfeliz" style="font-size:2vw">Viver Feliz:</label>
            <input type="checkbox" id="viverfeliz" name="whatever" value="Felicidade"><br><br>
            <label for="som" style="font-size:2vw">Desativar som:</label>
            <input type="checkbox" id="som" name="Somzin" value="desalegria"><br><br>
        </div>
        <div class="botoes col-12">
            <li class="botao">
                <a href="login.html" style="font-size:2vw">Deletar Perfil</a><br>
                <a href="index.html" style="font-size:2vw" >Log Out</a>
            </li>
        </div>
    </nav>
</body>
</html>
