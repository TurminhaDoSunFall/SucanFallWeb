<?php

namespace App\Http\Controllers\initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function index(){
        return view("initial/historia");
    }

}
