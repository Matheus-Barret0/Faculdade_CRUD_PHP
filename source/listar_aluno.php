<form class="container">
<h1>Alunos Cadastrado</h1>
<?php 
    /*--passando select e executando--*/
    $sql = "SELECT * FROM alunos";
    $res = $conn->query($sql);

    /*--pegando do res a quantidade de linhas--*/
    $qtd = $res->num_rows;

    if($qtd>0){
        print "<table class='table table-houver table-striped table-bordered'>";
        print "<tr>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>NOME</th>";
            print "<th>E-MAIL</th>";
            print "<th>CPF</th>";
            print "<th>Endereço</th>";
            print "<th>Ações</th>";
            print "</tr>";

        /*--loop para impressão do select--*/
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nomeCompleto."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->endereco."</td>";
            print "<td>
                    <a href='?page=editar&id=$row->id' class='btn btn-success'>Editar</a>
                    <a href='?page=excluir&id=$row->id' class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print("</table>");
    }else{
        print "<p class='alert alert-danger'>Aluno não encontrado!</p>";
    }
?>
</form>