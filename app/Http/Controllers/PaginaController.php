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
        $entrantes = $controllerComida->obtenerTipoDeComida('Entrantes.');
        $segundoPlato = $controllerComida->obtenerTipoDeComida('Segundo Plato.');
        $primerPlato = $controllerComida->obtenerTipoDeComida('Primer Plato.');
        $postres = $controllerComida->obtenerTipoDeComida('Postres.');
        return view('pagina/home', compact(['entrantes', 'segundoPlato', 'primerPlato', 'postres']));
    }

    public function añadirPlato()
    {
        return view('pagina/añadirPlato');
    }

    public function eliminarPlato()
    {
        $controllerComida = new ComidaController;
        $comidas = $controllerComida->obtenerComida();
        return view('pagina/eliminarPlato', compact(['comidas']));
    }

    public function comandas()
    {
        return view('pagina/comandas');
    }
}
