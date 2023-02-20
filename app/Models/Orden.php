<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'orden';

    //Atributos de la tabla que se pueden llenar. 
    protected $fillable = [
        'user_id',
    ];
}
