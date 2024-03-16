<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugador';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'ci', 'nombre', 'telefono', 'email',
    ];
    public function participantes(){
        return $this->hasMany(Participante::class,'CIjugador');
    }
}
