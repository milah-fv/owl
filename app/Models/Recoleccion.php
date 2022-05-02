<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recoleccion extends Model
{
    use HasFactory;
    protected $table = 'recoleccion';
    protected $fillable = [
        'id', 'fecha', 'hora', 'tipo_transporte', 'servicio_id', 'emp_recolectora_id', 'direccion',
    ];

    public function empresaRecolectora(){
        return $this->belongsTo(EmpresaRecolectora::class, 'emp_recolectora_id');
    }
    /*public function servicio(){
        return $this->belongsTo(Servicio::class);
    } */
}
