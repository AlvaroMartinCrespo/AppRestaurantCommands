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
        $controllerComida = new ComidaController;
        $comidas = $controllerComida->obtenerComida();
        return view('pagina/home', compact(['comidas']));
    }

    public function añadirPlato()
    {
        return view('pagina/añadirPlato');
    }

    public function eliminarPlato()
    {
        return view('pagina/eliminarPlato');
    }

    public function comandas()
    {
        return view('pagina/comandas');
    }
}
