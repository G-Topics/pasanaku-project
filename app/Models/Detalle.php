<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'detalle';
    public $timestamps = false;

    protected $fillable = ['id', 'fecha','id_partida','id_estado',];

    public function partida()
    {
        return $this->belongsTo( Partida::class, 'id_partida');
    }

    public function estado()
    {
        return $this->belongsTo( Estado::class, 'id_estado');
    }
}
