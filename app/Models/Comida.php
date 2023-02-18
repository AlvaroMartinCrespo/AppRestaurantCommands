<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;

    //Nombre de la tabla con la que esta relacionado.
    protected $table = 'comida';

    public $timestamps = false;

    //Atributos de la tabla que se pueden llenar. 
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion'
    ];
}
