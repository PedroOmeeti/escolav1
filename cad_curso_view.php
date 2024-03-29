<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <title>Cadastro Curso</title>
</head>

<body>
<?php 
    require_once ('menu.html');
  ?>

  <div class="h1 text-center bg-dark text-white p-3">Cadastro Curso</div>
  <div class="container">
    <form action="./controller/cad_curso.php" method="post">

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="nomeCurso" class="form-label">Nome Curso</label>
            <input type="text" class="form-control" id="nomeCurso" name="nomeCurso">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="datainicioCurso" class="form-label">Data de Início do Curso</label>
            <input type="date" class="form-control" id="datainicioCurso" name="datainicioCurso">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="datafimCurso" class="form-label">Data de Término do Curso</label>
            <input type="date" class="form-control" id="datafimCurso" name="datafimCurso">
            
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="nomeDocente" class="form-label">Docente</label>
            <select class="form-select" aria-label="Default select example" id="nomeDocente" name="nomeDocente">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="nomeTurma" class="form-label">Turma</label>
            <select class="form-select" aria-label="Default select example" id="nomeTurma" name="nomeTurma">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<!-- 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> -->

</body>

</html>