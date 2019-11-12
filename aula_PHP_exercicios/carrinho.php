<?php
require_once 'funcoesmysqlphp.php';

//unset($_SESSION['carrinho']['']);

//$cont = 0;

?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Carrinho</title>
    <div style="text-align:center;">
        <h1>Carrinho</h1>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </div>
</head>

<body>

    <div class="container">
        <?php    
        session_start();

        if(empty($_SESSION['carrinho'])){
            $_SESSION['carrinho'] = array();
        } 

        if(!empty($_GET)){
            $id = $_GET['ID'];
            $item = carregarCadastro($id);
            array_push($_SESSION['carrinho'], $item);
        }

        $carrinho = $_SESSION['carrinho'];

        ?>

<table class="table">
        <tr>
            <th>IMAGEM</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>QUANTIDADE</th>
         </tr>

        <?php      
            foreach ($carrinho as $key => $item){
               echo $key;
        ?>
            
        <tr>
            <td><img src="<?=$item['URL']?>" width="50px" height="50px"></td>
            <td><?=$item['NOME']?></td>
            <td><?=$item['SOBRENOME']?></td>
            <td>1</td>
            
            <td><a href="carrinho.php?acao=excluir<?=$key?> ">Excluir</td>

            
        </tr>


        <?php
            }
        ?>
    </table>
     
    <a href="dashboard.php">Continuar Comprando</a>
    <a href="login.php">Login</a>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

</body>

</html>