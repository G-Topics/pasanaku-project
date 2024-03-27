<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugador';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['ci', 'nombre','contraseña', 'email', 'telefono'];
    
    public function participantes(){
        return $this->hasMany(Participante::class,'ci_jugador');
    }
    public function cuentas(){
        return $this->hasMany(Cuenta::class,'ci_jugador');
    }
}
