<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'participante';
    public $timestamps = false;

    protected $fillable = [
        'id' ,'CIjugador','IDrol','IDpartida',
    ];

    public function jugador()
    {
        return $this->belongsTo( Jugador::class, 'CIjugador');
    }

    public function rol()
    {
        return $this->belongsTo( Rol::class, 'IDrol');
    }

    public function partida()
    {
        return $this->belongsTo( Partida::class, 'IDpartida');
    }
}
