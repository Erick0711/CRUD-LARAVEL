<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Projecto extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'usuarios';
    public $fillable = ['id','codigo','nombre','apellido','pais','nivel_de_equipo','correo','estado'];
}
