<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class matricula extends Model {
protected $table='matriculas';

protected $fillable = ['idcurso', 'idalumno', 'estado'];


}
