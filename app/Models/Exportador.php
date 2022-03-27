<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exportador extends Model
{
    use HasFactory;
    protected $table = 'exportadores';
    protected $fillable = [
        'nombre', 'rfc', 'domicilio', 'contacto','telefono',
    ];


    // relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
