<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuario extends Controller
{
    //

    public function amigo($num1, $num2)
    {
        $amigo = 0;
        for ($i=1 ; $i<$num1 ; $i++){
            if($num1 % $i == 0){
                $amigo = $amigo + $i;
            }
        }
        $ami = 0;
        if ($amigo==$num2){
            for ($i=1 ; $i<$num2 ; $i++){
                if($num2 % $i == 0){
                    $ami = $ami + $i;
                }
            }
            if ($ami==$num1) {
                return $num1." y ".$num2. " si son amigos";
            }
        }
            return $num1." y ".$num2. " no son amigos";
    }

    public function primo($num1)
    {
        $cont=0;
        $val=2;
	do {
		if($num1 % $val == 0) {
			
            return "NO es primo";
		}
		$val++;
	}while( $val<($num1/2));
	if($cont==0) {
		return "> SI es primo <";
	}
    }

    public function par($num1)
    {
        if($num1 % 2 == 0){
            return "Es par";
        } else {
            return "Es impar";
        }
    }
}


