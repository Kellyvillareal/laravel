<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model {
	protected $table = 'alumnos';

protected $fillable = ['identificacion', 'nombre', 'apellido', 'sexo','direccion','telefono','fechanac','estado','fechavin','fechadesv'];
}
