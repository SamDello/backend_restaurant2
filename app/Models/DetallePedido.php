<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'detallepedidos';

    protected $fillable = [
        'cantidad',
        'precio',
        'idOrdenInventarios',
        'idPedido',
       
    ];
    public $timestamps = false;
}
