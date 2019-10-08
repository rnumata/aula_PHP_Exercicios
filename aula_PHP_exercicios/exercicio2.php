<?php
session_start();
?>

<!DOCTYPE html>
<?php 

    require_once 'funcoes.php';

    $placa = isset($_POST["placa"])?$_POST["placa"]:0;
    $valor = isset($_POST["valor"])?$_POST["valor"]:0;
    $estado = isset($_POST["Estado"])?$_POST["Estado"]:0;

    $ipva = ipva($placa, $valor, $estado);


/* ------------------- $_SESSION -------------------*/

    if (empty($_SESSION['cart'])) {

        $_SESSION['cart'] = array();
    }

    //array_pop($_SESSION['cart']);

    array_push($_SESSION['cart'],$placa,$valor,$estado,$ipva); //$placa, $valor, $estado, $ipva

    //print_r($_SESSION['cart']);

    /*
    foreach ($_SESSION['cart'] as $key => $value){
        echo "$value<br>";
    } */

/* ------------------- $_SESSION -------------------*/

?>

<html>
<head>
    <meta charset="utf-8">
    <title>exercicio2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src = "_js/jquery.mask.js"></script>

    <script>
        $(document).ready(function(){
            $('#placa').mask('AAA-0000');
        });
    </script>


</head>

<body>
    <div class="container">
    <h1>Exercicio2</h1>

    <form action="exercicio2.php" method="POST">
        <div class="form-group">
            <label for="placa">Placa</label><br>
            <input class="form-control" type="text" name="placa" id="placa" required/>
        </div>
        <br>

        <div class="form-group">
            Valor<input class="form-control" type="number" name="valor" required/>
        </div>
        <br>

        <div class="form-group">
            <label for="estado">Estado</label><br>
            <select class="form-group" name="Estado" id="estado">
                <option value="0.1">PR</option>
                <option value="0.1">SC</option>
                 <option value="0.1">RS</option>
            </select>
        </div>

        <input class="btn btn-primary btn-lg" type="submit" value="Calculo"/>
        <br><br>

        <input class="form-control" type="number" name="resultado" value="<?=$ipva?>"/>
    </form>

    <br/>
    <hr/>
    </div>

    
</body>
</html>