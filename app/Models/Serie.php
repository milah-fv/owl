<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $table = 'series';
    protected $fillable = [
        'serie',
    ];

    //Relacion uno a muchos
    public function servicios(){
        return $this->hasMany(Servicio::class);
    }
}
