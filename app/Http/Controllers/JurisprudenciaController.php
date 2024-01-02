<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurisprudenciaController extends Controller
{
    public function index()
    {
        return view('legalTech.jurisprudencia');
    }
}
