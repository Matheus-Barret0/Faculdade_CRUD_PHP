<h3 class="container">Cadastro de Aluno: </h3>

<!--Enviando ação para SALVAR-->

<div class="container mt-5">
    <form action="?page=salvar" method="POST">
        <!-- Cria um campo de formulário oculto com o nome "acao" e o valor "cadastrar" -->
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome Completo</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="number" name="cpf" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
            <a class="btn btn-outline-secondary" href="?page=listar" role="button">VOLTAR</a>
        </div>
    </form>
</div>