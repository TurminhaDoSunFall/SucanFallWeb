<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroFotoController extends Controller
{
    public function index()
    {
        return view("cadastrofoto");
    }
}
