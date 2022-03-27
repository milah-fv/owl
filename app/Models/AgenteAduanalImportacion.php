<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenteAduanalImportacion extends Model
{
    use HasFactory;
    protected $table = 'agente_ad_importacion';
    protected $fillable = [
        'nombre', 'nit', 'domicilio', 'contacto','telefono',
    ];

    //Relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
