<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Exportador extends Model
{
    use HasFactory;
    protected $table = 'exportadores';
    protected $fillable = [
        'nombre', 'rfc', 'domicilio', 'contacto','telefono', 'pais_origen', 'ciudad_origen',
    ];


    // relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }

    protected function nombre(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value),
        );
    }
}
