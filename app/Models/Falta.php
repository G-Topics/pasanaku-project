<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    protected $table = 'falta';
    public $timestamps = false;

    protected $fillable = ['id', 'nro_dias','fecha','id_participante','id_ronda'];

    public function participante(){
        return $this->belongsTo(Participante::class,'id_participante');
    }

    public function ronda(){
        return $this->belongsTo(Ronda::class,'id_ronda');
    }
}
