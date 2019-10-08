<?php

function ipva ($placa, $valor, $estado) {
    $ipva = $valor*$estado;

    /*$ipva = 0;
    if ($estado == "PR") {
        $ipva = $valor * 0.035;
    } */ 

    return $ipva; 
}

 
?>