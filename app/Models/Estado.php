<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    protected $fillable = [
        'estado',
    ];

    //Relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
