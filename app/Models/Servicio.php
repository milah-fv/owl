<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    protected $fillable = [
        'id', 'numero','codigo', 'fecha', 'estado_id', 'exportador_id', 'agente_exportacion_id', 'importador_id', 'agente_importacion_id', 'serie_id'
    ];

    //Relacón uno a muchos (inversa)
    public function exportador(){
        return $this->belongsTo(Exportador::class);
    }
    public function agente_ad_exportacion(){
        return $this->belongsTo(AgenteAduanalExportacion::class);
    }
    public function importador(){
        return $this->belongsTo(Importador::class);
    }
    public function agente_ad_importacion(){
        return $this->belongsTo(AgenteAduanalImportacion::class);
    }
    public function serie(){
        return $this->belongsTo(Serie::class);
    }
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    public function recolecciones(){
        return $this->hasMany(Recoleccion::class);
    }

    //Relación muchos a muchos
    /*public function recolecciones(){
        return $this->belongsToMany(EmpresaRecolectora::class);
    }*/
    public function cargas(){
        return $this->belongsToMany(EmpresaCarga::class);
    }
    /* public function ent_final(){
        return $this->belongsToMany(Importador::class);
    } */

    //Relacion uno a muchos
    /*public function detalles(){
        return $this->hasMany(ServicioDetalles::class);
    }*/
    /*public function pagos(){
        return $this->hasMany(Pago::class);
    }*/
}
