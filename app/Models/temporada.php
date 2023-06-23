<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temporada extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;
    protected $table = "temporadas";
    protected $fillable = [
        "nombre"
    ];
    public $timestamps =false;
}
