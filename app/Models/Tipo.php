<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdTipo';
    protected $table = 'tipos';
    protected $fillable = ['NombreTipo'];

    //realacion de uno a muchos
    public function vehiculos(){
        return $this->hasMany('app\Models\Vehiculo');
    }
}
