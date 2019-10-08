<?php

    $nome = $_POST ["cad_nome"];
    echo "<br/>$nome<br/>";

    switch ($nome){
        case "tiago" : echo "<br/>";
        break;
        default : echo "<BR/>$nome";
    }

    $sobrenome = $_POST ["cad_sobrenome"];
    echo "<br/>$sobrenome";

    $email = $_POST ["cad_email"];
    echo "<br/>$email";

    $senha = $_POST ["cad_senha"];
    switch ($senha){
        case 1 : echo "<br/>Senha invalida";
        break;
        case 123 : echo "<br/>Senha OK!!";
        break;
    }

    $endereco = $_POST ["cad_endereco"];
    echo "<br/>$endereco";

    $complemento = $_POST ["cad_complemento"];
    echo "<br/>$complemento";

    $cidade = $_POST ["cad_cidade"];
    echo "<br/>$cidade";

    $estado = $_POST ["cad_estado"];
    echo "<br/>$estado";

    $cep = $_POST ["cad_cep"];
    echo "<br/>$cep";

    $num = isset($_POST ["gridCheck"])?$_POST ["gridCheck"]:0;
    switch ($num){
        case 1:
            echo "<br/>CONCORDA";
            break;
        case 0:
            echo "<br/>NAO CONCORDA";
            break;
    }

    /*
    foreach ($_POST as $valor){
        echo "<br/>$valor";
    }
    */

?>