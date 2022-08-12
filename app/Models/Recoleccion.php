<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recoleccion extends Model
{
    use HasFactory;
    protected $table = 'recoleccion';
    protected $fillable = [
        'id', 'fecha', 'hora', 'tipo_transporte', 'servicio_id', 'emp_transporte_id', 'direccion', 'lugar_origen',
    ];

    public function empresaTransporte(){
        return $this->belongsTo(EmpresaTransporte::class, 'emp_transporte_id');
    }
    /*public function servicio(){
        return $this->belongsTo(Servicio::class);
    } */
}
