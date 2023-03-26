<h3 class="container">Editar Cadastro do Alunos: </h3>

<!--Enviando ação para SALVAR-->
<form class="container" action="?page=salvar" method="POST">
    <!-- Cria um campo de formulário oculto com o nome "acao" e o valor "cadastrar" -->
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome Completo</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="bnt bnt-primary">ENVIAR</button>
    </div>
</form>