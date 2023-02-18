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

        $comidas = Comida::all();
        return view('pagina/home', compact(['comidas']));
    }

    public function user()
    {
    }
}
