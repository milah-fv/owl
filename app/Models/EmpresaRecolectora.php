<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaRecolectora extends Model
{
    use HasFactory;
    protected $table = 'empresa_recolectora';
    protected $fillable = [
        'id', 'nombre', 'domicilio', 'contacto', 'telefono',
    ];

    //Relación muchos a muchos
    /* public function servicios(){
        return $this->belongsToMany(Servicio::class);
    } */
    // Relación uno a muchos
    public function recolecciones(){
        return $this->hasMany(Recoleccion::class);
    }
}
