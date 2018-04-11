<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infoModel extends Model
{
    protected $table='info';
    protected $fillable=['name', 'age','phone','gender','image'];
}
