<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partida';
    public $timestamps = false;
    protected $fillable = ['id', 'nombre', 'frecuencia','fecha_inicio','monto','multa','capacidad','descripcion','id_moneda'];

    public function participantes(){
        return $this->hasMany(Participante::class,'id_partida');
    }

    public function invitaciones(){
        return $this->hasMany(Invitacion::class,'id_partida');
    }

    public function moneda()
    {
        return $this->belongsTo( Moneda::class, 'id_moneda');
    }

    public function detalles(){
        return $this->hasMany(Detalle::class,'id_partida');
    }
    public function rondas(){
        return $this->hasMany(Ronda::class,'id_partida');
    }
}
