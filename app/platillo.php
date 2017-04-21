<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class platillo extends Model
{
    protected $table='platillo';
    public $primaryKey = 'id_platillo';
    protected $fillable = ['nombrePlatillo', 'descripcion', 'tipo', 'precio', 'imagen'];
     public $timestamps = false;

}
