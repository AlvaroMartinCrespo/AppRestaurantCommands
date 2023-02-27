<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\OrdenComida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenController extends Controller
{

    /**
     * Se obtiene el id de la comanda y se actualiza cambiando su estado a confirmada.
     */
    public function enviar($id)
    {
        $orden = Orden::find($id);
        $orden->update(['confirmada' => 1]);
        return redirect(route('comandas'));
    }

    /**
     * Obteniendo el ud de la orden y el id del plato, podemos eliminar de la tabla orden_comida la comanda una vez este servido.
     */
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

        return $ordenComida;
    }

    /**
     * Elimina todas las comandas que hay en la tabla.
     */
    public function eliminarComandas()
    {
        OrdenComida::query()->delete();
        Orden::query()->delete();
        return redirect('comandas');
    }

    /**
     * Cambia el estado de la comnada con un id a servido.
     */
    public function servir($id)
    {
        $orden = Orden::find($id);
        // dd($orden);
        $orden->update(['servida' => 1]);
        return redirect(route('comandas'));
    }
}
