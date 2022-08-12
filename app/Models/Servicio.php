<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    protected $fillable = [
        'id', 'numero','codigo', 'fecha', 'estado_id', 'exportador_id', 'agente_exportacion_id', 'importador_id', 'agente_importacion_id', 'serie_id', 'transporte_id'
    ];

    //Relacón uno a muchos (inversa)
    public function exportador(){
        return $this->belongsTo(Exportador::class);
    }
    public function agente_ad_exportacion(){
        return $this->belongsTo(AgenteAduanalExportacion::class, 'agente_exportacion_id');
    }
    public function importador(){
        return $this->belongsTo(Importador::class);
    }
    public function agente_ad_importacion(){
        return $this->belongsTo(AgenteAduanalImportacion::class, 'agente_importacion_id');
    }
    public function serie(){
        return $this->belongsTo(Serie::class);
    }
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    public function transporte(){
        return $this->belongsTo(Transporte::class);
    }
    public function recolecciones(){
        return $this->hasOne(Recoleccion::class);
    }
    public function cargas(){
        return $this->hasOne(EntregaInicio::class);
    }
    public function entregas(){
        return $this->hasOne(EntregaFinal::class);
    }
    //hasMany
    public function detalle(){
        return $this->hasOne(ServicioDetalles::class);
    }
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
    
    protected function id(): Attribute
    {
        return new Attribute(
            get: fn ($value) => str_pad($value, 5, '0', STR_PAD_LEFT),
        );
    }
    public function pago()
    {
        return $this->hasOne(Pago::class);
    }

    //Relación muchos a muchos
    /*public function recolecciones(){
        return $this->belongsToMany(EmpresaRecolectora::class);
    }*/
    /*public function cargas(){
        return $this->belongsToMany(EmpresaCarga::class);
    }*/
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
