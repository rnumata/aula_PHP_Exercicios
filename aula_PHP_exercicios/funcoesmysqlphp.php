<?php

    /* Parametros para conexão com o SGBD */

    DEFINE("SGBD","mysql");
    DEFINE("NOME_BANCO_DE _DADOS","aulaphp");
    DEFINE("CAMINHO","localhost");
    DEFINE("USUARIO","sa");
    DEFINE("SENHA","");

    function conexao(){

        try{                                                                /*Tenta fazer conxexão*/
            $conn = new PDO("mysql:host=localhost:3306;dbname=aulaphp","root","");
            return $conn;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
    }

   
    function salvarcadastro($id, $nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado, $cep){
        $conn = conexao();

        if(empty($id)){
            $stmt = $conn->prepare("INSERT INTO php (NOME, 
            SOBRENOME, 
            EMAIL, 
            SENHA, 
            ENDERECO, 
            COMPLEMENTO, 
            CIDADE, 
            ESTADO,
             CEP) VALUES (:nome,:sobrenome,:email,:senha,:endereco,:complemento,:cidade,:estado,:cep)");
        } else {
            $stmt = $conn->prepare("UPDATE php SET 
            nome= :nome, 
            sobrenome= :sobrenome, 
            email= :email, 
            senha= :senha, 
            endereco= :endereco, 
            complemento= :complemento, 
            cidade= :cidade, 
            estado= :estado, 
            cep= :cep WHERE id= :id");      
            $stmt-> bindParam(":id", $id);
        }

        $stmt-> bindParam(":nome", $nome);
        $stmt-> bindParam(":sobrenome", $sobrenome);
        $stmt-> bindParam(":email", $email);
        $stmt-> bindParam(":senha", $senha);
        $stmt-> bindParam(":endereco", $endereco);
        $stmt-> bindParam(":complemento", $complemento);
        $stmt-> bindParam(":cidade", $cidade);
        $stmt-> bindParam(":estado", $estado);
        $stmt-> bindParam(":cep", $cep);

        if($stmt->execute()){
            return "<script> alert('Cadastro efetuado com sucesso !');</script>";
        } else {
            print_r($stmt->errorInfo());
            //return "Não foi possível salvar as informações";
            return "<script> alert('Não foi possível salvar as informações');</script>";
        }
    }

    function listarCadastro (){
        $conn = conexao();
        $stmt = $conn->prepare ("SELECT ID, NOME, SOBRENOME, EMAIL, SENHA, ENDERECO, COMPLEMENTO, CIDADE, ESTADO, CEP FROM php ORDER BY NOME");

        if($stmt->execute()){
            return ($stmt->fetchAll(PDO::FETCH_ASSOC));
        } else {
            print_r($stmt->errorInfo());
            return "<script> alert('Consulta não Realizada !');</script>";
        }
    }   


    function carregarCadastro ($id){
        $conn = conexao();
        $stmt = $conn->prepare ("SELECT 
        ID, 
        NOME, 
        SOBRENOME, 
        EMAIL, 
        SENHA, 
        ENDERECO, 
        COMPLEMENTO, 
        CIDADE, 
        ESTADO, 
        CEP FROM php  where id = :id");

        $stmt->bindParam(":id",$id);    
        if($stmt->execute()){
            return ($stmt->fetch(PDO::FETCH_ASSOC));
        } else {
            print_r($stmt->errorInfo());
            return "<script> alert('Consulta não Realizada !');</script>";
        }
    }   

    

?>