<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function insertarComida()
    {
        $comidaController = new ComidaController();
    }

    public function enviarComandaYVaciarCarrito()
    {
    }
}
