<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenComida extends Model
{
    use HasFactory;

    protected $table = 'orden_comida';

    public $timestamps = false;

    //Atributos de la tabla que se pueden llenar. 
    protected $fillable = [
        'id_orden',
        'id_comida',

    ];
}
