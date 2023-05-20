<?php
/*--Verifica o valor da variável "acao" recebida por meio da solicitação HTTP
    e executa diferentes ações de acordo com o valor recebido.--*/
switch (@$_REQUEST["acao"]){
    /*--casos de escolha do CRUD--*/
    /*--CREATE--*/
    case "cadastrar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];
        $imagem = $_POST['imagem'];

        $sql = "INSERT INTO alunos (nomeCompleto,email,cpf,endereco ) 
                    VALUES ('{$nome}', '{$email}', '{$cpf}', '{$endereco}', '{$imagem}')";

        /*--executando a query apartir da variavel declarada no conf.php--*/
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        else{
            print "<script>alert('Cadastrado sem sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    /*--UPDATE--*/
    case "editar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];

        $sql = "UPDATE alunos SET 
                        nomeCompleto = '{$nome}', 
                        email = '{$email}', 
                        cpf = '{$cpf}', 
                        endereco = '{$endereco}'
                        WHERE id =".$_REQUEST["id"];
        /*--executando a query apartir da variavel declarada no conf.php--*/
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        else{
            print "<script>alert('Edição sem sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    /*--DELETE--*/
    case "excluir":
        $sql = "DELETE FROM alunos
                        WHERE id =".$_REQUEST["id"];
        /*--executando a query apartir da variavel declarada no conf.php--*/
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluido com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        else{
            print "<script>alert('Exclusão sem sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    }
?>