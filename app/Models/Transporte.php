<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;
    protected $table = 'transportes';
    protected $fillable = [
        'operador', 'placas_tracto', 'licencia', 'caat', 'nro_eco', 'capacidad', 'placa_cajas', 'transporte_afianzador', 'codigo_aduanero',
    ];

    //Relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
