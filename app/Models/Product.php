<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'concentration',
        'idSeason',
    ];
    
=======
 
>>>>>>> 3a4a8b9bb4ed40dc25e3ff1ecd26fa20e3d5d52e
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
    public function season()
{
    return $this->belongsTo('App\Models\Season', 'idSeason');
}



}
