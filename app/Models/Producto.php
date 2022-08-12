<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
        'id', 'factura', 'cajas', 'contenido', 'peso', 'servicio_id',
    ];

    //Relacion uno a muchos
    /*public function servicios(){
        return $this->hasMany(Servicio::class);
    } */
    /*public function serv_detalles(){
        return $this->hasMany(ServicioDetalles::class);
    }*/
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);

    }
}
