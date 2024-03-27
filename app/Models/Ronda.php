<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ronda extends Model
{
    protected $table = 'ronda';
    public $timestamps = false;

    protected $fillable = ['id', 'monto','h_inicio','duracion','id_ganador','id_partida'];

    public function ofertas(){
        return $this->hasMany(Oferta::class,'id_ronda');
    }

    public function faltas(){
        return $this->hasMany(Falta::class,'id_ronda');
    }

    public function ganador(){
        return $this->belongsTo(Participante::class,'id_ganador');
    }

    public function partida(){
        return $this->belongsTo(Partida::class,'id_partida');
    }

    public function pagos(){
        return $this->hasMany(Pago::class,'id_ronda');
    }
}
