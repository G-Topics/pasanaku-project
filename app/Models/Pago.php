<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    public $timestamps = false;

    protected $fillable = ['id', 'fecha','monto','descripcion','id_cuenta_origen','id_cuenta_destino','id_participante','id_ronda'];
    

    public function ctsorigen(){
        return $this->belongsTo(Cuenta::class,'id_cuenta_origen');
    }
    public function ctsdestino(){
        return $this->belongsTo(Cuenta::class,'id_cuenta_destino');
    }
    public function participantes(){
        return $this->belongsTo(Participante::class,'id_participante');

    }
    public function rondas(){
        return $this->belongsTo(Ronda::class,'id_ronda');
    }
}
