<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'participante';
    public $timestamps = false;
    protected $fillable = ['id' ,'ci_jugador','id_rol','id_partida',];

    public function jugador()
    {
        return $this->belongsTo( Jugador::class, 'ci_jugador');
    }

    public function rol()
    {
        return $this->belongsTo( Rol::class, 'id_rol');
    }

    public function partida()
    {
        return $this->belongsTo( Partida::class, 'id_partida');
    }

    public function invitaciones(){
        return $this->hasMany(Invitacion::class,'id_participante');
    }
    public function pagos(){
        return $this->hasMany(Pago::class,'id_participante');
    }
    public function ronda(){
        return $this->belongsTo(Ronda::class,'id_ganador');
    }
    public function ofertas(){
        return $this->hasMany(Oferta::class,'id_participante');
    }
    public function faltas(){
        return $this->hasMany(Invitacion::class,'id_participante');
    }
}
