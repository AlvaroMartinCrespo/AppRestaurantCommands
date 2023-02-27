<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Comida;
use App\Models\Orden;
use App\Models\OrdenComida;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class PaginaController extends Controller
{
    /**
     * Retorna la vista quienes somos.
     */
    public function quienesSomosPage()
    {
        return view('pagina/quienesSomos');
    }

    // TODO
    /**
     * Arreglar el añadir comida
     */

    /**
     * Obtenemos los datos de que relacionan cada orden_comida con cada orden, obteniendo asi el id del usuario, el id de la comida (con el que posteriormente obtendremos el plato ya que utilizamos una función del controllador de comida, que mediante el id obtenemos los datos del plato). Guardamos todos los datos en un array asociativo y lo retornamos.
     */
    public function tratarDatos()
    {
        $orden = new OrdenController();
        $datos = $orden->crearComidaOrden();
        $comidasPorMesa = array();

        // Recorrer los datos y agregar cada entrada a la matriz asociativa correspondiente
        foreach ($datos as $dato) {
            $mesa = $dato->user_id;
            $comidaId = $dato->id_comida;

            $comida = new ComidaController();
            $datosComida = $comida->obtenerComidaPorId($comidaId);

            $comidaArray = [
                'id' => $datosComida->id,
                'nombre' => $datosComida->nombre,
                'precio' => $datosComida->precio,
                'ruta_imagen' => $datosComida->ruta_imagen,
                'descripcion'  => $datosComida->descripcion,
                'servida' => $dato->servida,
                'confirmada' => $dato->confirmada,
                'idOrden' => $dato->id
            ];

            // Si la mesa aún no existe en la matriz asociativa, inicializarla como un array vacío
            if (!isset($comidasPorMesa[$mesa])) {
                $comidasPorMesa[$mesa] = array();
            }

            // Agregar la comida al array correspondiente a la mesa
            array_push($comidasPorMesa[$mesa], $comidaArray);
        }
        return $comidasPorMesa;
    }

    /**
     * Obtenemos todos los tipos de comida del controlador y la introducimos en la vista para que sean mostradas.
     */
    public function homePage()
    {
        $controllerComida = new ComidaController;
        $entrantes = $controllerComida->obtenerTipoDeComida('Entrantes.');
        $segundoPlato = $controllerComida->obtenerTipoDeComida('Segundo Plato.');
        $primerPlato = $controllerComida->obtenerTipoDeComida('Primer Plato.');
        $postres = $controllerComida->obtenerTipoDeComida('Postres.');
        $carrito = $this->cargarCarrito();
        // dd($carrito);
        return view('pagina/home', compact(['entrantes', 'segundoPlato', 'primerPlato', 'postres', 'carrito']));
    }

    /**
     * Esta función se refiere a la comanda del usuario, la que solo puede ver él.
     * Obtiene los datos del plato y del usuario respecto de cada orden y se retorna.
     */
    private function cargarCarrito()
    {
        $idUsuario = Auth::id();
        $orden = new OrdenController();
        $datos = $orden->crearComidaOrden();
        $comidasPorMesa = array();

        // Recorrer los datos y agregar cada entrada a la matriz asociativa correspondiente
        foreach ($datos as $dato) {
            $mesa = $dato->user_id;
            $comidaId = $dato->id_comida;

            $comida = new ComidaController();
            $datosComida = $comida->obtenerComidaPorId($comidaId);

            $comidaArray = [
                'id' => $datosComida->id,
                'nombre' => $datosComida->nombre,
                'precio' => $datosComida->precio,
                'imagen' => $datosComida->ruta_imagen,
                'servida' => $dato->servida,
                'confirmada' => $dato->confirmada,
                'idOrden' => $dato->id
            ];

            // Si la mesa aún no existe en la matriz asociativa, inicializarla como un array vacío
            if (!isset($comidasPorMesa[$mesa])) {
                $comidasPorMesa[$mesa] = array();
            }


            // Agregar la comida al array correspondiente a la mesa
            array_push($comidasPorMesa[$mesa], $comidaArray);
        }

        //Si es un admin o si es un usuario normal.
        if (auth()->user()->admin) {

            if (count($comidasPorMesa) < $idUsuario || count($comidasPorMesa) !== 0) {
                return null;
            } else {
                return
                    $comidasPorMesa[$idUsuario];
            }
        } else {

            // dd($comidasPorMesa);
            if (empty($comidasPorMesa)) {
                return null;
            } else {
                return
                    $comidasPorMesa[$idUsuario];
            }
        }
    }

    /**
     * Función que retorna la vista añadirPlato.
     */
    public function añadirPlato()
    {
        return view('pagina/añadirPlato');
    }

    /**
     * Se obtienen todas las comidas y se insertan en la vista de eliminarPlato.
     */
    public function eliminarPlato()
    {
        $controllerComida = new ComidaController;
        $comidas = $controllerComida->obtenerComida();
        return view('pagina/eliminarPlato', compact(['comidas']));
    }

    /**
     * Obtenemos todas las comandas (datos) y la comanda del usuario que esta registrado (carrito) y las insertamos en la vista para que según el rol de usuario que este registrado se muestre una u otra.
     */
    public function comandas()
    {
        $datos = $this->tratarDatos();
        $carritoUsuario = $this->cargarCarrito();
        // dd($datos);
        // dd($datos);
        //Tenemos que obtener la comida de los id y almacenarla en una variable.
        return view('pagina/comandas', compact(['datos', 'carritoUsuario']));
    }
}
