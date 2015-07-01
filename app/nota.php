<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class nota extends Model {

protected $table='notas';
protected $fillable = ['idasigv', 'nota1', 'nota2','nota3','nota4'];
}
