<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    public $timestamps = false;

    protected $fillable = [
        'id', 'nombre', 'descripcion',
    ];
    public function partidas(){
        return $this->hasMany(Partida::class,'IDmoneda');
    }
}

