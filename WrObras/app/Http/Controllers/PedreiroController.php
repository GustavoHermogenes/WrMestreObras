<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedreiroController extends Controller
{
    public function index(){
        return view('dashboard.pedreiro.index');
    }
}
