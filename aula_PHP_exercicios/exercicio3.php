<?php
session_start();
?>

<!DOCTYPE html>
<?php

require_once 'funcoes.php';

$a = isset ($_POST['altura']) ? $_POST['altura']:1;
$p = isset ($_POST['peso']) ? $_POST['peso']:1;
$gn = isset ($_POST['genero'])?$_POST['genero']:'*';

$resultado = imc($p, $a, $gn);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>IMC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style>
        h1 {
            text-align: center;
            color: rgb(89, 0, 255)(209, 206, 206);
        }
    </style>
</head>

<body>
    <div class="container">
    <h1>Cálculo IMC</h1>

    <form action="exercicio3.php" method="POST">

        <div class="form-group">
        <label for="alt">Altura</label><br>
        <input type="text" class="form-control altr" name="altura" id="alt"  required/>
        </div>

        <div class="form-group">
        <label for="peso">Peso</label><br>
        <input type="text" class="form-control" name="peso" id="peso" required/>
        </div>

        <select name="genero" class="form-control">
            <option value="Masc">Masculino</option>
            <option value="Fem">Feminino</option>
        </select><br><br>   

        <input type="submit" value="Calcular"  class="btn btn-dark"/>
        <br><br/>

        <input class="form-control" type="text" name="resultado" value="<?=$resultado?>" readonly/>
    </form>
    <br><br>


    <h3>Historico de IMC</h3>

    <?php
    /* ---------------------------*/

    if (empty($_SESSION['lista'])) {

    $_SESSION['lista'] = array();
    }

    //array_pop($_SESSION['lista']);

    array_push($_SESSION['lista'],"A Altura é: ".$a,"O Peso é: ".$p,"O IMC é: ".$resultado); 

    //print_r($_SESSION['lista']);

        
    foreach ($_SESSION['lista'] as $key => $value){
        echo "$value<br>";
    } 

    /* -----------------------*/

    ?>
    
    <!-------- src do js ---------->

    <script src = "_js/jquery.mask.js"></script>    

    <!--copiar mask do jquery -->

    <script>
       $(document).ready(function(){
        $('.altr').mask('0.00');
        });
    </script>

</div>    
</body>
</html>