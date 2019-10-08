<!DOCTYPE html>
<?php

require_once 'funcoes.php';

$v1 = isset ($_POST['valor1']) ? $_POST['valor1']:1;
$v2 = isset ($_POST['valor2']) ? $_POST['valor2']:1;
$op = isset ($_POST['operacao'])?$_POST['operacao']:'*';

$resultado = calculo($v1, $v2, $op);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>exercicio1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <h1>Exercicio1</h1>

    <form action="exercicio1.php" method="POST">
        <input type="number" name="valor1" required/>
        <br><br/>
        <input type="number" name="valor2" required/>
        <br><br/>
        <select name="operacao">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>        
        <input type="submit" value="="/>
        <br><br/>
        <input type="number" name="resultado" value="<?=$resultado?>"/>
    </form>


    
</body>
</html>