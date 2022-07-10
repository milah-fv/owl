<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescripcionMercaderia extends Model
{
    use HasFactory;
    protected $table = 'descripcion_mercaderia';
    protected $fillable = [
        'descripcion_mercaderia', 'fraccion_arancelaria', 
    ];

    //Relacion uno a muchos
    /*public function servicios(){
        return $this->hasMany(Servicio::class);
    } */
    public function serv_detalles(){
        return $this->hasMany(ServicioDetalles::class);
    }
}
