<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'detalle';
    public $timestamps = false;

    protected $fillable = ['id', 'fecha','IDpartida','IDestado',];

    public function partida()
    {
        return $this->belongsTo( Partida::class, 'IDpartida');
    }

    public function estado()
    {
        return $this->belongsTo( Estado::class, 'IDestado');
    }
}
