<?php
    $sql = "SELECT * FROM alunos
                WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="container">
    <h3>Editar Cadastro do Aluno: </h3>
    <!--Enviando ação para EDITAR-->
    <form action="?page=salvar" value="editar" method="POST">
        <!-- Cria um campo de formulário oculto com o nome "acao" e o valor "cadastrar" -->
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id?>">
        <div class="mb-3">
            <label>Nome Completo</label>
            <input type="text" name="nome" value="<?php print $row->nomeCompleto; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="number" name="cpf" value="<?php print $row->cpf; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
            <a class="btn btn-outline-secondary" href="?page=listar" role="button">VOLTAR</a>
        </div>
    </form>
</div>
