<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuenta';
    public $timestamps = false;
    protected $fillable = ['id','nrocuenta' ,'id_moneda','ci_jugador'];

    
    public function moneda()
    {
        return $this->belongsTo( Moneda::class, 'id_moneda');
    }

    public function jugador()
    {
        return $this->belongsTo( Jugador::class, 'ci_jugador');
    }

   
    public function pagoorigen()
    {
        return $this->hasMany( Pago::class, 'id_cuenta_origen');
    }

    public function pagodestino(){
        return $this->hasMany( Pago::class, 'id_cuenta_destino');
    }
}
