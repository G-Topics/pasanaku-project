<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    public $timestamps = false;

    protected $fillable = ['id', 'fecha','monto','IDronda','IDparticipante','ctaOrigen','ctaDestino'];
    

    public function ctsorigen(){
        return $this->belongsTo(Cuenta::class,'ctaOrigen');
    }
    public function ctsdestino(){
        return $this->belongsTo(Cuenta::class,'ctaDestino');
    }
    public function participantes(){
        return $this->belongsTo(Participante::class,'IDparticipante');

    }
    public function rondas(){
        return $this->belongsTo(Ronda::class,'IDronda');
    }
}
