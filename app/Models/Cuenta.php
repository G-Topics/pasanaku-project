<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuenta';
    public $timestamps = false;
    protected $fillable = ['id','nrocuenta' ,'CIjugador','IDmoneda'];

    public function jugador()
    {
        return $this->belongsTo( Jugador::class, 'CIjugador');
    }

    public function moneda()
    {
        return $this->belongsTo( Moneda::class, 'IDmoneda');
    }

    public function pagoorigen()
    {
        return $this->hasMany( Pago::class, 'ctaOrigen');
    }

    public function pagodestino(){
        return $this->hasMany( Pago::class, 'ctaDestino');
    }
}
