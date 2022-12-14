<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitasVentas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'fecha_hora', 'precio', 'completado'];
    protected $guarded = ["id"];
}
