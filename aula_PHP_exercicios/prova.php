<?php

    require_once 'funcoesProva.php';
    session_start();

    //$contador = 1;
    //$_POST['contador'] = $_POST['contador'] + 1;
    //$_SESSION['contador'] = $_SESSION['contador'] + 1;

    //echo $_POST['contador']." ".$_SESSION['contador'];

    //exit ();

    if (empty($_SESSION['resultado'])){
        $_SESSION['resultado'] = array();
    }

    $retorno = empty($_POST);
    
    if (!$retorno){

        $nome = isset($_POST['nome'])?$_POST['nome']:0;
        $valor = isset($_POST['valor'])?$_POST['valor']:0;
        $estado = isset($_POST['estado'])?$_POST['estado']:"PR";
        $marca = isset($_POST['marca'])?$_POST['marca']:0;
        $quant = isset($_POST['quantidade'])?$_POST['quantidade']:0;

        $res = calcularICMS($nome, $estado, $valor, $quant);
        $a = aliquotaICMS($estado, $quant);

        array_push($_SESSION['resultado'],$nome, $valor, $estado, $marca, $quant);
        //print_r($_SESSION['resultado']);

    }

?>
<html>
    <head>        
        <div class="container">
        <title>Prova de PHP</title>
        <link rel="stylesheet" href="bootstrap.min.css">    
        </div>
    </head>
    <body>
        <div class="container">
        <br/>
        <h1 style="text-align:center">Cálculo de ICMS</h1>
        <form action="prova.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do produto" required/>
        <br/>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" class="form-control" placeholder="Digite a marca do produto" required/>
        <br/>
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor" class="form-control" placeholder="Digite o valor do produto" required/>
        <br/>
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade" class="form-control" placeholder="Informe a quantidade desejada " required/>
        <br/>
        <label for="estado">Estado</label>
        <select name="estado" class="form-control">
            <option value="PR">PR</option>
            <option value="SP">SP</option>
            <option value="SC">SC</option>
        </select>
        <br/>
        <input type="submit" value="Venda" class="form-control"/>
        <br/><br/>
        <!--<input type="text" name="resultado"
            value="<?=$res?>"/>-->

        <?php if (!$retorno){ ?>
        <h5>O produto <?=$nome?> cujo valor é R$ <?=$valor?> teve alíquota de ICMS de <?=$a?>% e valor total de R$ <?=$res?></h5>
        <?php } ?>
        </form>
        <h4>Histórico de venda</h4>
        <?php

        for ($i = 0; $i < count($_SESSION['resultado']); $i++){
            echo $_SESSION['resultado'] [$i]."<br/>";
        }
        
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="js/jquery.mask.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#placa').mask('AAA-0000');
                //$('#valor').mask('0.000,00');
            });
        </script>
    </div>
    </body>
</html>