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

        <div class="row">
            <?php
            $list = listarCadastro();
            foreach ($list as $lista) {
                $id = $lista['ID'];
                $nome = $lista['NOME'];
                $sobrenome = $lista['SOBRENOME'];
                $url = $lista['URL'];
                ?>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $url ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $nome ?></h5>
                            <p class="card-text"><?= $sobrenome ?></p>
                            <a href="detalhes.php?ID=<?= $id ?>" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>


        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

</body>

</html>