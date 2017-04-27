<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orden extends Model
{
    protected $table='orden';
    public $primaryKey = 'id_orden';
    protected $fillable = ['fecha', 'comentarios', 'cliente', 'status'];
    public $timestamps = false;
}
