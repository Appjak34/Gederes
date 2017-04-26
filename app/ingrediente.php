<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    protected $table='ingredientes';
    public $primaryKey = 'nombreIngrediente';
    public $incrementing = false;
    protected $fillable = ['nombreIngrediente', 'cantidad'];
    public $timestamps = false;
}
