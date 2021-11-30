<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequerenteController extends Controller
{
    public function dashboard(){
        return view('requerentes.dashboard');
    }

    public function create(){
        return view('requerentes.cadastrar');
    }

}
