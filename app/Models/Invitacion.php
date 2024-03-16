<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    protected $table = 'invitacion';
    public $timestamps = false;

    protected $fillable = [
        'id','IDparticipante','IDpartida',
    ];
    public function participante()
    {
        return $this->belongsTo( Participante::class, 'IDparticipante');
    }

    public function partida()
    {
        return $this->belongsTo( Partida::class, 'IDpartida');
    }
}
