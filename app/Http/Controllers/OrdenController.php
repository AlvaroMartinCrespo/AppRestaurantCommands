<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function guardarOrden(Request $request)
    {
        $nuevaOrden = new Orden();
        $nuevaOrden->user_id = $request->user_id;
        $nuevaOrden->save();
        return redirect(route('home'));
    }
}
