<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;
    protected $table = "products";
    protected $fillable = [
        "nombre",
        "descripcion",
        "imagen",
        "precio",
        "idTemporada"
    ];
    public $timestamps =false;

    
    public function favoritos(){
        return $this->hasMany('App\Models\Favorite');
    }
    public function shoppingCarts(){
        return $this->hasMany('App\Models\ShoppingCart');
    }
    public function image(){
        return $this->morphOne('App\Models\Image','images');
    }
}
