<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntregaInicio extends Model
{
    use HasFactory;
    protected $table = 'entrega_inicio';
    protected $fillable = [
        'id', 'fecha', 'hora', 'tipo_transporte', 'lugar_carga', 'servicio_id', 'emp_transporte_id', 
    ];

    public function empresaTransporte(){
        return $this->belongsTo(EmpresaTransporte::class, 'emp_transporte_id');
    }
    /*public function servicio(){
        return $this->belognsTo(Servicio::class);
    }*/

}
