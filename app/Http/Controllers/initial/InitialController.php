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
                        "url" => "img/carrossel/imagemdeexemplo.png"
                    ],
                    [ 
                        "nome" => "por_sol",
                        "url" => "img/carrossel/por_sol.jpg"
                    ]
                ]
            ];
        return view("initial/initial", $carrossel);
    }
}
