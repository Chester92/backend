<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdAccesorio';
    protected $table = 'accesorios';
    protected $fillable = ['NombreAccesorio'];

    //realcion muchos a uno
    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }

    public function modelo(){
        return $this->belongsTo('App\Models\Modelo');
    }

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }
}

