<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'ordenes';

    protected $fillable = [
        'descripcion',
        'codigo',
        'precio',
        'idLocal',
        'idTipo',
        'idCategoria',
       
    ];
    public $timestamps = false;
}
