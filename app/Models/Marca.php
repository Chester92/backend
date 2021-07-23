<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdMarca';
    protected $table = 'marcas';
    protected $fillable = ['NombreMarca'];

    //realacion de uno a muchos
    public function vehiculos(){
        return $this->hasMany('app\Models\Vehiculo');
    }
}
