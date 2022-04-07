<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaCarga extends Model
{
    use HasFactory;
    protected $table = 'empresa_carga';
    protected $fillable = [
        'id', 'nombre', 'domicilio', 'contacto', 'telefono', 'estado',  'ciudad',
    ];
    //Relación muchos a muchos
    /* public function servicios(){
        return $this->belongsToMany(Servicio::class);
    } */
    public function cargas(){
        return $this->hasMany(EntregaInicio::class);
    }

}
