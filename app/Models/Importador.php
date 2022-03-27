<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importador extends Model
{
    use HasFactory;
    protected $table = 'importadores';
    protected $fillable = [
        'nombre', 'nit', 'domicilio', 'contacto','telefono',
    ];

    //Relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }

    /*public function servicio_final(){
        return $this->belongsToMany(Servicio::class);
    }*/
}
