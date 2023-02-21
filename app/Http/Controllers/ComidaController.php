<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use App\Models\ComidaTipoComida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComidaController extends Controller
{

    public function crearComida(Request $request)
    {
        $comida = new Comida();
        $comida->nombre = $request->nombre;
        $comida->ruta_imagen = $request->imagen;
        $comida->descripcion = $request->descripcion;
        $comida->precio = $request->precio;
        $comida->save();
    }

    public function eliminarComida()
    {
        $idPlato = $_REQUEST['id'];
        $plato = Comida::find($idPlato);
        $plato->delete();
        return redirect(route('eliminarPlato'));
    }

    public function obtenerComida()
    {
        return Comida::all();
    }

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

    public function obtenerComidaPorId($id)
    {
        $plato = Comida::find($id);
        // dd($plato->nombre);
        return $plato;
    }
}
