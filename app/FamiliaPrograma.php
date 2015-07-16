<?php

namespace Course;

use Illuminate\Database\Eloquent\Model;


class FamiliaPrograma extends Model
{
    use \SortableTrait;
    protected $table='familia_programa';
    protected $fillable = ['folio', 'direccion', 'latitud', 'longitud', 'altura'];
    //protected $hidden = ['password', 'remember_token'];
}
