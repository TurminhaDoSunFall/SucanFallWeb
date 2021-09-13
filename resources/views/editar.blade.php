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
    <title>Editar</title>
</head>
<body>
    <header class="col-12">
        <div class="menu col-2">
            <img src="{{asset('img/logo.png')}}" alt="Logo" class="image" style="max-width:60%;height:auto;">
        </div>
        <div class="menu col-10">
            <p style="font-size:3vw">EDITAR</p>
        </div>
    </header> 
    <section class="col-12">
        <div class="editar col-5">
            <img src="{{asset(img/'imagemdeexemplo.png')}}" alt="Exemplo">
        </div>
        <div class="editar col-7">
            <h2>{{config('user.titulo'}}</h2><br>
            <p>{{config('user.descricao')</p>
        </div>
        <input type="submit" value="submit">
    </section>
