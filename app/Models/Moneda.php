<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table = 'moneda';
    public $timestamps = false;
    protected $fillable = [
        'id', 'nombre', 'smonetario',
    ];
}
