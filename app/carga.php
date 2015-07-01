<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class carga extends Model {

protected $table='cargas';
protected $fillable = ['codigoasig', 'idprofesor', 'estado'];

}
