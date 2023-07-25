<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class formaDePago extends Model
{
    use HasFactory;


    public function pago(){
        // $profile = Profile::where('user_id',$this->id)->first(); sin especificar
 // $profile = Profile::where('foreing_key',$this->local_key)->first(); especificando 

 return $this->hasOne('App\Models\pago');
}


}
