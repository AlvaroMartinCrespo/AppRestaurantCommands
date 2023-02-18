<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginaController extends Controller
{
    public function quienesSomosPage()
    {
        return view('pagina/quienesSomos');
    }

    public function homePage()
    {

        $comidas = $this->obtenerComida();
        return view('pagina/home', compact(['comidas']));
    }

    public function obtenerComida()
    {
        return Comida::all();
    }

    public function obtenerEntrantes()
    {
        
    }

    public function obtenerPrimerPlato()
    {
    }

    public function obtenerSegundoPlato()
    {
    }

    public function obtenerPostres()
    {
    }
}
