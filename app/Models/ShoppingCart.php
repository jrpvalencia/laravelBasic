<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'idProduct',
        'product_quantity',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function producto(){
        return $this->belongsTo('App\Models\Product');
    }
    public function pedido(){
        return $this->hasOne('App\Models\Order');
    }
}
