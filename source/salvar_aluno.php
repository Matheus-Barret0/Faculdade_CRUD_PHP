<?php
switch (@$_REQUEST["page"]){
    /*--casos de escolha do CRUD--*/
    /*--CREATE--*/
    case "cadastrar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO alunos (nomeCompleto,email,cpf,endereco ) 
                    VALUES ('{$nome}', '{$email}', '{$cpf}', '{$endereco}')";

        $res = $conn->query($sql);
        break;
    /*--UPDATE--*/
    case "editar":
        break;
    /*--DELETE--*/
    case "excluir":
        break;
    }
?>