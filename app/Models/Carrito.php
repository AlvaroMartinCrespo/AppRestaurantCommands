<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito';

    //Atributos de la tabla que se pueden llenar. 
    protected $fillable = [
        'nombre',
        'precio',
        'ruta_imagen',
        'cantidad'
    ];
}
