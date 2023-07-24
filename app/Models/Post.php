<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //belong es el que trae la llave 


    public function user(){
        return $this->belongsTo('App\Models\user');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\categoria');
    }
}
