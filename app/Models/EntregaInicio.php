<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntregaInicio extends Model
{
    use HasFactory;
    protected $table = 'entrega_inicio';
    protected $fillable = [
        'id', 'fecha', 'hora', 'tipo_transporte', 'lugar_carga', 'servicio_id', 'emp_carga_id', 
    ];

    public function empresaCarga(){
        return $this->belongsTo(EmpresaCarga::class, 'emp_carga_id');
    }
    /*public function servicio(){
        return $this->belognsTo(Servicio::class);
    }*/

}
