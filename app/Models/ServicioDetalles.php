<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioDetalles extends Model
{
    use HasFactory;
    protected $table = 'servicio_detalles';
    protected $fillable = [
        'id', 'nro_pedido_cliente','nro_factura_cliente', 'fecha_factura', 'valor_mercancia', 'descripcion_merc_id', 'regimen_aduanero', 'peso_neto', 'volumen', 'pallets', 'cajas', 'servicio_id'
    ];

    public function desc_mercaderia(){
        return $this->belongsTo(DescripcionMercaderia::class, 'descripcion_merc_id');
    }

    //Relacón uno a muchos (inversa)
    /*public function servicio(){
        return $this->belognsTo(Servicio::class);
    } */
}
