<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallesorden extends Model
{
    protected $table='detallesorden';
    public $primaryKey = 'id_detalles_orden';
    protected $fillable = ['id_orden', 'platillo'];
    public $timestamps = false;
}

