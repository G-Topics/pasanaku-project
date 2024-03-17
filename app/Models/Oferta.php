<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
    public $timestamps = false;
    protected $fillable = ['id' ,'IDparticipante','IDronda','monto','fecha'];

    public function rondas(){
        return $this->belongsTo(Ronda::class,'IDronda');
    }
    
    public function participantes(){
        return $this->belongsTo(Participante::class,'IDparticipante');
    }
}
