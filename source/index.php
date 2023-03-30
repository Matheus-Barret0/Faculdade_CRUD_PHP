<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!--Bootstrap CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Faculdade CDL</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Lista</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="">
    <div class="row">
      <div class="col mt-5">
        <!--incluindo as paginas secundarias a pagina inicial-->
        <?php
        include("config.php");
        /*--declarando variavel--*/
        switch (@$_REQUEST["page"]) {
          /*--casos de escolha--*/
          case "novo":
            include("cadastro_aluno.php");
            break;
          case "listar":
            include("listar_aluno.php");
            break;
          /*--caso: SALVAR no cadastro_aluno.php--*/
          case "salvar":
            include("salvar_aluno.php");
            break;
          case "editar":
            include("editar_aluno.php");
            break;
          case "excluir":
            include("excluir_aluno.php");
            break;  
        }
        ?>
      </div>
    </div>
  </div>










  <script src="js/bootstrap.bundle.min.js">


  </script>
</body>

</html>