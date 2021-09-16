<?php

namespace App\Http\Controllers\initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitialController extends Controller
{
    public function index() {
        $carrossel = [
            "imagens" => [
                    [
                        "nome" => "imagemdeexemplo",
                        "url" => "img/carrossel/imagemdeexemplo.svg"
                    ],
                    [ 
                        "nome" => "por_sol",
                        "url" => "img/carrossel/por_sol.jpg"
                    ],
                    [
                        "nome" => "imagemdeexemplo2",
                        "url" => "img/carrossel/imagemdeexemplo.jpg"
                    ]
                ]
            ];
        return view("initial/initial", $carrossel);
    }
}
