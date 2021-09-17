<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalhessController extends Controller
{
    public function index()
    {
        return view("detalhes");
    }
}
