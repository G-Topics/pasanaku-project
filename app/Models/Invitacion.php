<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    protected $table = 'invitacion';
    public $timestamps = false;

    protected $fillable = ['id','fecha','nombre','telefono','email','id_participante','id_partida',];
    
    public function participante()
    {
        return $this->belongsTo( Participante::class, 'id_participante');
    }

    public function partida()
    {
        return $this->belongsTo( Partida::class, 'id_partida');
    }
    public function detallesinvitacionestado(){
        return $this->hasMany(DetalleInvitacionEstado::class);
    }
}
