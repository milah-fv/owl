<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntregaFinal extends Model
{
    use HasFactory;
    protected $table = 'entrega_final';
    protected $fillable = [
        'id', 'fecha', 'hora', 'lugar_entrega', 'lugar_destino', 'servicio_id', 'emp_transporte_id',
    ];

    public function empresaTransporte(){
        return $this->belongsTo(EmpresaTransporte::class, 'emp_transporte_id');
    }
}
