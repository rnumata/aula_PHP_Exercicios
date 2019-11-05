<?php
require_once 'funcoesmysqlphp.php';
?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Loja Virtual</title>
    <div style="text-align:center;">
        <h1>Loja Virtual - Roupas</h1>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </div>
</head>

<body>

    <div class="container">

        <?php    
        $id = $_GET['ID'];
        $item = carregarCadastro($id);
        $url = $item['URL'];
        $nome = $item['NOME'];
        ?>
        <img src="<?=$url?>" width="100px" height="100px">
        <br>
        <a href="carrinho.php?ID=<?=$id?>">Adicionar</a>

    </div>
<div class="container">
        
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

</body>

</html>