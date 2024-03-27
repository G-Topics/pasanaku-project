<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
    public $timestamps = false;
    protected $fillable = ['id' ,'monto','fecha','id_participante','id_ronda'];

    
    public function participantes(){
        return $this->belongsTo(Participante::class,'id_participante');
    }

    public function rondas(){
        return $this->belongsTo(Ronda::class,'id_ronda');
    }
    
    
}
