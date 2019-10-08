<?php

function calcularICMS($nome, $estado, $valor, $quant){
    $v = 0;
    $a = 0;

    if ($quant > 3){
        if($estado == "PR"){
            $v = ($valor * $quant) * 0.07;
            $a = 0.07;
        }
        elseif($estado == "SC"){
            $v = ($valor * $quant) * 0.10;
            $a = 0.10;
        }
        elseif($estado == "SP"){
            $v = ($valor * $quant) * 0.14;
            $a = 0.14;
        }       
    }
    else{
        if ($estado == "PR"){
            $v = ($valor * $quant) * 0.12;
            $a = 0.12;
        }
        elseif($estado == "SC"){
            $v = ($valor * $quant) * 0.15;
            $a = 0.15;
        }
        else{
            $v = ($valor * $quant) * 0.19;
            $a = 0.19;
        }
    }
    return $v;
}
function aliquotaICMS($estado, $quant){
    $a = 0;

    if ($quant > 3){
        if($estado == "PR"){
            $a = 7;
        }
        elseif($estado == "SC"){
            $a = 10;
        }
        elseif($estado == "SP"){  
            $a = 14;
        }       
    }
    else{
        if ($estado == "PR"){         
            $a = 12;
        }
        elseif($estado == "SC"){           
            $a = 15;
        }
        else{           
            $a = 19;
        }
    }
    return $a;
}

?>