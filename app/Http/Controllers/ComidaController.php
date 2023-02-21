<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

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
        // print_r($idPlato);
        $plato = Comida::find($idPlato);
        $plato->delete();
        return redirect(route('eliminarPlato'));
    }

    public function obtenerComida()
    {
        return Comida::all();
    }

    public function obtenerEntrantes()
    {
        $entrantes = Comida::table('comida_tipo_comida')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.*', 'users.name as user_name', 'products.name as product_name', 'products.price')
            ->get();
    }

    public function obtenerPrimerPlato()
    {
    }

    public function obtenerSegundoPlato()
    {
    }

    public function obtenerPostres()
    {
    }
}
