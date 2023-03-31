<?php
    $sql = "SELECT * FROM alunos
                WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="container">
    <h3>Excluir Cadastro do Aluno: </h3>
    <p>Aviso: Por favor, esteja ciente de que quando você solicita a exclusão da conta do aluno, todos os dados associados a ele serão permanentemente apagados.</p>
    <!--Enviando ação para EXCLUIR-->
    <form class="mt-5" action="?page=salvar" value="excluir" method="POST">
        <!-- Cria um campo de formulário oculto com o nome "acao" e o valor "cadastrar" -->
        <input type="hidden" name="acao" value="excluir">
        <input type="hidden" name="id" value="<?php print $row->id?>">
        <div class="mb-3">
            <label>Nome Completo</label>
            <input type="text" name="nome" value="<?php print $row->nomeCompleto; ?>" class="form-control" disabled>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" disabled>
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control" maxlength="11" disabled>
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control" disabled>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-danger">EXCLUIR</button>
            <a class="btn btn-outline-secondary" href="?page=listar" role="button">VOLTAR</a>
        </div>
    </form>
</div>