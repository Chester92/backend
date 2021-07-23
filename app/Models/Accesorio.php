<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdAccesorio';
    protected $table = 'accesorios';
    protected $fillable = ['NombreAccesorio'];
}
