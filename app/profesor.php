<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model {

	protected $table='profesors';

	protected $fillable = ['identificacion','nombre','apellido','sexo','direccion','telefono','direccion','fechanac','titulo','estado','fechavin','fechadesv'];

}
