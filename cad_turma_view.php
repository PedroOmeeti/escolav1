<?php
 
 require_once('./classes/docente_class.php');
 require_once('./classes/curso_class.php');

 $c = new Docente();
 // Guardar o array de resultado na variavel:
 $resultado = $c->Listar();
 $cont = 0;

 $d = new Curso();
 $resCurso = $d->Listar();

?>


<!doctype html>
  <html lang="pt-BR">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>Cadastro Turma</title>
  </head>

  <body>
    <?php 
      require_once ('menu.html');
    ?>

    <div class="h1 text-center bg-dark text-white p-3">Cadastro Turma</div>
    <div class="container">
      <form action="./controller/cad_turma.php" method="post">

        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="nomeTurma" class="form-label">Nome Turma</label>
              <input type="text" class="form-control" id="nomeTurma" name="nomeTurma">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="docenteFK" class="form-label">Docente</label>
              <select class="form-select" aria-label="Default select example" id="docenteFK" name="docenteFK">
                <option selected>Selecione</option>

                <?php foreach($resultado as $docente){ ?>
                 <!-- Loop através dos resultado da query -->
                  <option value="<?=$docente['id_docente'];?>"> <?=$docente['nome_docente'];?></option>
                <?php } ?>

              </select>
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="cursoFK" class="form-label">Curso</label>
              <select class="form-select" aria-label="Default select example" id="cursoFK" name="cursoFK">
                <option selected>Selecione</option>
                
                <?php foreach($resCurso as $curso){ $cont++ ?>
                 <!-- Loop através dos resultado da query -->
                  <option value="<?=$curso['id_curso'];?>"> <?=$curso['nome_curso'];?></option>
                <?php } ?>

              </select>
              
            </div>
          </div>
        </div>

        <div class="row">
        </div>
        
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="dataterminoTurma" class="form-label">Data de término da turma</label>
              <input type="date" class="form-control" id="dataterminoTurma" name="dataterminoTurma">
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="datacomecoTurma" class="form-label">Data de início da turma</label>
              <input type="date" class="form-control" id="datacomecoTurma" name="datacomecoTurma">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script> -->

  </body>

  </html>
