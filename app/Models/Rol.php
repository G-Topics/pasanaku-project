<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    public $timestamps = false;
    protected $fillable = ['id', 'nombre', 'descripcion',];

    public function participantes(){
        return $this->hasMany(Participante::class,'id_rol');
    }
}
