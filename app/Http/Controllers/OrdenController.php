<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\OrdenComida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenController extends Controller
{

    public function enviar($id)
    {
        $orden = Orden::find($id);
        $orden->update(['confirmada' => 1]);
        return redirect(route('comandas'));
    }

    public function eliminarPlato($idComanda, $idPlato)
    {
        DB::table('Orden_comida')->where('id_orden', $idComanda)->where('id_comida', $idPlato)->delete();
        return redirect(route('comandas'));
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
            ->select('orden_comida.*', 'orden.user_id', 'orden.confirmada', 'orden.servida', 'orden.id')
            ->where('orden.user_id', '<>', null)
            ->get();

        // dd($ordenComida);

        return $ordenComida;
    }

    public function eliminarComandas()
    {
        OrdenComida::query()->delete();
        Orden::query()->delete();
        return redirect('comandas');
    }

    public function servir($id)
    {
        $orden = Orden::find($id);
        // dd($orden);
        $orden->update(['servida' => 1]);
        return redirect(route('comandas'));
    }
}
