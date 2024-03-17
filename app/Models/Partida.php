<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partida';
    public $timestamps = false;

    protected $fillable = [
        'id', 'cant_participantes', 'fechainicio','IDmoneda','IDestado',
    ];

    public function moneda()
    {
        return $this->belongsTo( Moneda::class, 'IDmoneda');
    }

    public function participantes(){
        return $this->hasMany(Participante::class,'IDpartida');
    }

    public function invitaciones(){
        return $this->hasMany(Invitacion::class,'IDpartida');
    }

}
