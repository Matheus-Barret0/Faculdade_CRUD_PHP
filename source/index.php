<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Cadastro de Alunos</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="index.php">Faculdade CDL</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Cadastrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div>
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
            default:
              include("apresentacao.php");
              break; 
          }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>