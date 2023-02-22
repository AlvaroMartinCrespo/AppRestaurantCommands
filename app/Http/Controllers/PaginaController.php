<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Comida;
use App\Models\Orden;
use App\Models\OrdenComida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaginaController extends Controller
{
    public function quienesSomosPage()
    {
        return view('pagina/quienesSomos');
    }

    public function tratarDatos()
    {
        $orden = new OrdenController();
        $datos = $orden->crearComidaOrden();
        $comidasPorMesa = array();

        // Recorrer los datos y agregar cada entrada a la matriz asociativa correspondiente
        foreach ($datos as $dato) {
            $mesa = $dato->user_id;
            $comidaId = $dato->id_comida;

            // dd($comidaId);

            $comida = new ComidaController();
            $datosComida = $comida->obtenerComidaPorId($comidaId);

            // dd($comida);

            $comidaArray = [
                'nombre' => $datosComida->nombre,
                'precio' => $datosComida->precio,
                'imagen' => $datosComida->ruta_imagen,
            ];

            // dd($datosComida);

            // Si la mesa aún no existe en la matriz asociativa, inicializarla como un array vacío
            if (!isset($comidasPorMesa[$mesa])) {
                $comidasPorMesa[$mesa] = array();
            }

            // Agregar la comida al array correspondiente a la mesa
            array_push($comidasPorMesa[$mesa], $datosComida);
        }

        // dd($comidasPorMesa);
        return $comidasPorMesa;
    }

    public function homePage()
    {
        $controllerComida = new ComidaController;
        $entrantes = $controllerComida->obtenerTipoDeComida('Entrantes.');
        $segundoPlato = $controllerComida->obtenerTipoDeComida('Segundo Plato.');
        $primerPlato = $controllerComida->obtenerTipoDeComida('Primer Plato.');
        $postres = $controllerComida->obtenerTipoDeComida('Postres.');
        $carrito = $this->cargarCarrito();
        return view('pagina/home', compact(['entrantes', 'segundoPlato', 'primerPlato', 'postres', 'carrito']));
    }

    private function cargarCarrito()
    {

        $carrito = Carrito::all();
        return $carrito;
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
        $datos = $this->tratarDatos();
        // dd($datos);
        //Tenemos que obtener la comida de los id y almacenarla en una variable.
        return view('pagina/comandas', compact(['datos']));
    }
}
