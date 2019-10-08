<?php

function calculo($valor1, $valor2, $operacao) {
   $resultado = 0;
    switch ($operacao) {
        case "+":
        $resultado = $valor1 + $valor2;
        break;
        case "*":
        $resultado = $valor1 * $valor2;
        break;
        case "-":
        $resultado = $valor1 - $valor2;
        break;
        case "/":
        $resultado = $valor1 / $valor2;
        break;
    }
   return $resultado;
}

function ipva ($placa, $valor, $estado) {
    $ipva = 0;

    $ipva = $valor * $estado;

    /*$ipva = 0;
    if ($estado == "PR") {
        $ipva = $valor * 0.035;
    } */

    return $ipva;
}


function imc ($p, $a, $gn){
    $imc = 0;
    $imc = $p/($a * $a);

    return number_format($imc, 2, ',', ' ');
    }



?>