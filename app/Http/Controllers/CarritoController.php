<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function insertarComida($id)
    {
        $comidaController = new ComidaController();
        $plato = $comidaController->obtenerComidaPorId($id);
        $this->llenarCarrito($plato);

        return redirect(route('inicio'));
    }

    public function enviarComandaYVaciarCarrito()
    {
    }

    public function llenarCarrito($plato)
    {
        $carrito = new Carrito();
        $carrito->nombre = $plato->nombre;
        $carrito->precio = $plato->precio;
        $carrito->ruta_imagen = $plato->ruta_imagen;
        $carrito->cantidad = 1;
        $carrito->save();
    }
}
