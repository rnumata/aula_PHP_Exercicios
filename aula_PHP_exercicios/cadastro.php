<!DOCTYPE html>

<?php

require_once 'funcoesmysqlphp.php';

$listarCadastro = listarCadastro();


//print_r($_POST);  // IMPRESSÃO PARA VERFICIFCAR O QUE ESTÁ NO ARRAY
//echo empty($_POST);

$vazio = empty($_POST);
if($vazio){
    //echo "FALTA PREENCHER";
   
} else {
    $nome = $_POST['cad_nome'];
    $sobrenome = $_POST['cad_sobrenome'];
    $email = $_POST['cad_email'];
    $senha = $_POST['cad_senha'];
    $endereco = $_POST['cad_endereco'];
    $complemento = $_POST['cad_complemento'];
    $cidade = $_POST['cad_cidade'];
    $estado = $_POST['cad_estado'];
    $cep = $_POST['cad_cep'];

    $cad = salvarcadastro($nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado, $cep);
    echo $cad;
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <!--Link css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
</head>
<body>

<h1 style="text-align: center">Cadastro de Cliente</h1>
<div class="container">
      <form id="cadastro" method="POST" action="cadastro.php"> <!-- era funcoes.php-->

        <div class="form-row">
            <div class="col"><br>
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="cad_nome" required="required">
            </div>
            <div class="col"><br>
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="cad_sobrenome">
            </div>
        </div>
        <br>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="cad_email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" name="cad_senha">
            </div>
        </div>
        <br>

        <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" name="cad_endereco">
        </div>

        <div class="form-group">
            <label for="inputAddress2">Complemento</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartmento, casa, ou andar" name="cad_complemento">
        </div>
        <br>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" name="cad_cidade">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control" name="cad_estado">
                    <option selected>Selecionar</option>
                    <option value="PR">Paraná</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="RS">Rio Grande do Sul</option>
                </select>
            </div>
            

            <div class="form-group col-md-2">
                <label for="inputZip">CEP</label>
                <input type="text" class="form-control cep" id="inputZip" name="cad_cep">
            </div>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

    <br/><br/><br/>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>EMAIL</th>
            <th>SENHA</th>
            <th>ENDERECO</th>
            <th>COMPLEMENTO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>CEP</th>
        </tr>

        <?php      
            foreach ($listarCadastro as $lista){
        ?>

        <tr>
            <td><?=$lista['ID']?></td>
            <td><?=$lista['NOME']?></td>
            <td><?=$lista['SOBRENOME']?></td>
            <td><?=$lista['EMAIL']?></td>
            <td><?=$lista['SENHA']?></td>
            <td><?=$lista['ENDERECO']?></td>
            <td><?=$lista['COMPLEMENTO']?></td>
            <td><?=$lista['CIDADE']?></td>
            <td><?=$lista['ESTADO']?></td>
            <td><?=$lista['CEP']?></td>
        </tr>

        <?php
            }
        ?>

    </table>

    <!-- script bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- src do js -->    
    <script src = "_js/jquery.mask.js"></script>    

    <!--copiar mask do jquery -->    
    <script>
       $(document).ready(function(){
        $('.cep').mask('00000-000');
        });
    </script>


</div>
</body>
</html>
