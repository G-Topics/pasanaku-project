<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ronda extends Model
{
    protected $table = 'ronda';
    public $timestamps = false;

    protected $fillable = ['id', 'monto','ganador','vencimoento','IDpartida'];

    public function pagos(){
        return $this->hasMany(Pago::class,'IDronda');
    }
    public function ofertas(){
        return $this->hasMany(Oferta::class,'IDronda');
    }
    public function ganadores(){
        return $this->hasMany(Participante::class,'ganador');
    }
    public function partidas(){
        return $this->belongsTo(Partida::class,'IDPartida');
    }
}
