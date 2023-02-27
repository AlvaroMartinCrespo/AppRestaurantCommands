<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use App\Models\ComidaTipoComida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComidaController extends Controller
{

    /**
     * Obtiene los datos del formulario y crea una nueva comida. Retorna la vista del formulario.
     */
    public function crearComida(Request $request)
    {
        $comida = new Comida();
        $comida->nombre = $request->nombre;
        $comida->ruta_imagen = $request->imagen;
        $comida->descripcion = $request->descripcion;
        $comida->precio = $request->precio;
        $comida->save();
        $comidaTipoComida = new ComidaTipoComida();
        $comidaTipoComida->id_comida = $comida->id;
        $comidaTipoComida->id_tipo = $request->tipoComida;
        $comidaTipoComida->save();
        return redirect(route('añadirPlato'));
    }

    /**
     * Eliminar la comida con el id que se haya pasado desde la vista.
     */
    public function eliminarComida($id)
    {
        $plato = Comida::find($id);
        $plato->delete();
        return redirect(route('eliminarPlato'));
    }

    /**
     * Obtiene todas los platos que hay en la tabla.
     */
    public function obtenerComida()
    {
        return Comida::all();
    }

    /**
     * Obtiene los platos según el tipo que sean.
     */
    public function obtenerTipoDeComida($tipoPlato)
    {
        $comidas = DB::table('comida')
            ->join('comida_tipo_comida', 'comida.id', '=', 'comida_tipo_comida.id_comida')
            ->join('tipo_comida', 'tipo_comida.id', '=', 'comida_tipo_comida.id_tipo')
            ->select('comida.nombre as comida', 'comida.id', 'comida.precio', 'comida.descripcion', 'comida.ruta_imagen', 'tipo_comida.nombre as tipo_comida')
            ->get();

        $comidaSeleccionada = [];
        foreach ($comidas as $comida) {
            if ($comida->tipo_comida === $tipoPlato) {
                array_push($comidaSeleccionada, $comida);
            }
        }

        return $comidaSeleccionada;
    }

    /**
     * Obtiene el plato por el id.
     */
    public function obtenerComidaPorId($id)
    {
        $plato = Comida::find($id);
        // dd($plato);
        return $plato;
    }
}
