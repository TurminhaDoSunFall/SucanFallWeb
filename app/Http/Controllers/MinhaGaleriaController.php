<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinhaGaleriaController extends Controller
{
    public function index()
    {
        return view("minhagaleria");
    }
}
