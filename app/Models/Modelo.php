<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdModelo';
    protected $table = 'modelos';
    protected $fillable = ['NombreModelo'];

    //realacion de uno a muchos
    public function vehiculos(){
        return $this->hasMany('app\Models\Vehiculo');
    }
}
