<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoInvitacion extends Model
{
    protected $table = 'estado_invitacion';
    public $timestamps = false;

    protected $fillable = ['id', 'nombre', 'descripcion',];

    public function detallesinvitacionestado(){
        return $this->hasMany(DetalleInvitacionEstado::class);
    }
}
