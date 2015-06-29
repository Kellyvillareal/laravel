<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class secretaria extends Model {

	protected $table = 'secretarias';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['identificacion','nombre','apellido','sexo','direccion','telefono','direccion','fechanac'];

}