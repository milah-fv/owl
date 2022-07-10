<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaTransporte extends Model
{
    use HasFactory;
    protected $table = 'empresa_transporte';
    protected $fillable = [
        'id', 'nombre', 'domicilio', 'contacto', 'telefono',
    ];
    //Relación muchos a muchos
    /* public function servicios(){
        return $this->belongsToMany(Servicio::class);
    } */
    // Relación uno a muchos
    public function transportes(){
        return $this->hasMany(Recoleccion::class);
    }
    public function transportesCarga(){
        return $this->hasMany(EntregaInicio::class);
    }
    public function transportesFinal(){
        return $this->hasMany(EntregaFinal::class);
    }
}
