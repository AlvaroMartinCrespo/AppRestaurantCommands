<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginaController extends Controller
{
    public function quienesSomosPage()
    {
        $datosUser = $this->user();
        // $nombre = $datosUser[0];
        // $email = $datosUser[1];
        return view('pagina/quienesSomos');
    }

    public function homePage()
    {
        $datosUser = $this->user();
        // $nombre = $datosUser[0];
        // $email = $datosUser[1];
        return view('pagina/home');
    }

    public function user()
    {
        $datosUser = [];

        if (Auth()->check()) {
            array_push($datosUser, Auth()->user()->name);
            array_push($datosUser, Auth()->user()->email);
        }

        return $datosUser;
    }
}
