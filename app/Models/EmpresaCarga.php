<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaCarga extends Model
{
    use HasFactory;
    //Relación muchos a muchos
    public function servicios(){
        return $this->belongsToMany(Servicio::class);
    }
}
