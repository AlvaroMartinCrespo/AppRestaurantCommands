<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\OrdenComida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class OrdenController extends Controller
{

    public function mostrarOrden()
    {
    }

    public function crearOrden($usuarioId, $id)
    {
        $orden = new Orden();
        $orden->user_id = $usuarioId;
        $orden->save();
        $ordenComida = new OrdenComida();
        $ordenComida->id_orden = $orden->id;
        $ordenComida->id_comida = $id;
        $ordenComida->save();
        return redirect(route('inicio'));
    }

    public function guardarOrden(Request $request)
    {
        $nuevaOrden = new Orden();
        $nuevaOrden->user_id = $request->user_id;
        $nuevaOrden->save();
        return redirect(route('home'));
    }

    public function crearComidaOrden()
    {
        $ordenComida = DB::table('orden_comida')
            ->join('orden', 'orden_comida.id_orden', '=', 'orden.id')
            ->select('orden_comida.*', 'orden.user_id')
            ->where('orden.user_id', '<>', null)
            ->get();



        return $ordenComida;
    }

    public function eliminarComandas()
    {
        OrdenComida::query()->delete();
        Orden::query()->delete();
        return redirect('comandas');
    }
}
