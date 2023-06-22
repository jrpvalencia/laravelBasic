<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;
    protected $table = "productos";
    protected $fillable = [
        "nombre",
        "descripcion",
        "imagen",
        "precio",
        "idTemporada"
    ];
    public $timestamps =false;
}
