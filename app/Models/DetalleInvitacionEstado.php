<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleInvitacionEstado extends Model
{
    protected $table = 'detalle_invitacion_estado';
    public $timestamps = false;

    protected $fillable = ['id', 'fecha','id_invitacion','id_estado_invitacion'];

    public function invitacion(){
        return $this->belongsTo(Invitacion::class,'id_invitacion');
    }

    public function estadoInvitacion(){
        return $this->belongsTo(EstadoInvitacion::class,'id_estado_invitacion');
    }
}
