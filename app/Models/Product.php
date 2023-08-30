<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;
    protected $table = "products";
   
    public $timestamps =false;
    protected $fillable = ['name', 'description', 'image', 'price', 'concentration', 'idSeason'];

    // Define un atributo de acceso para obtener la URL completa de la imagen
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
    
    public function favoritos(){
        return $this->hasMany('App\Models\Favorite');
    }
    public function shoppingCarts(){
        return $this->hasMany('App\Models\ShoppingCart');
    }
    public function image(){
        return $this->morphOne('App\Models\Image','images');
    }

    public function comments(){
        return $this->morphMany('App\Models\Comment','comments');
    }
}
