<?php
 
 require_once('./classes/aluno_class.php');
 require_once('./classes/curso_class.php');

$c = new Curso();
  $resultadoCurso = $c ->Listar();

 $c = new Aluno();
 // Guardar o array de resultado na variavel:
 $resultadoAluno = $c->ListarCpf();

?>

<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Matricula</title>
</head>

<body>
  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Escola</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Cadastrar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="cad_aluno_view.php">Aluno</a></li>
                  <li><a class="dropdown-item" href="cad_docente_view.php">Docente</a></li>
                  <li><a class="dropdown-item" href="cad_turma_view.php">Turma</a></li>
                  <li><a class="dropdown-item" href="cad_curso_view.php">Curso</a></li>

                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="cad_matricula_view.php">Matricula</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="h1 text-center bg-dark text-white p-3">Matricula</div>
  <div class="container">
    <form action="./controller/cad_curso.php" method="post">

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="matriculaAluno" class="form-label">Nome Aluno</label>
              <?php foreach($resultadoAluno as $aluno){ ?>
                <!-- Loop através dos resultado da query -->
                <input type="text" class="form-control" id="matriculaAluno" name="matriculaAluno">
              <?php } ?>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="cpfalunoMatricula" class="form-label">CPF Aluno</label>
            <input type="text" class="form-control" id="cpfalunoMatricula" name="cpfalunoMatricula">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="matriculaCurso" class="form-label">Curso</label>
            <select class="form-select" aria-label="Default select example" id="matriculaCurso" name="matriculaCurso">
              <option selected>Escolha o curso</option>
              <?php foreach($resultadoCurso as $curso){ ?>
                 <!-- Loop através dos resultado da query -->
                  <option value="<?=$curso['id_curso'];?>"> <?=$curso['nome_curso'];?></option>
                <?php } ?>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="codigoMatricula" class="form-label">Matricula</label>
            <input type="text" class="form-control" id="codigoMatricula" name="codigoMatricula">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="dataMatricula" class="form-label">Data de Matrícula</label>
            <input type="date" class="form-control" id="dataMatricula" name="dataMatricula">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>