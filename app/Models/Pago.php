<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    //Relacón uno a muchos (inversa)
    /*public function servicio(){
        return $this->belongsTo(Servicio::class);
    }*/
}
