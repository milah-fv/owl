<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenteAduanalExportacion extends Model
{
    use HasFactory;
    protected $table = 'agente_ad_exportacion';
    protected $fillable = [
        'nombre', 'nit', 'domicilio', 'contacto','telefono',
    ];

    //Relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
