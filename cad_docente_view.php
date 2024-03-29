<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <title>Cadastro Docente</title>
</head>

<body>
  <?php 
    require_once ('menu.html');
  ?>

  <div class="h1 text-center bg-dark text-white p-3">Cadastro Docente</div>
  <div class="container">
    <form action="./controller/cad_docente.php" method="post">

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="nomeDocente" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeDocente" name="nomeDocente">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="cpfDocente" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpfDocente" name="cpfDocente">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="emailDocente" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailDocente" name="emailDocente">
            <div id="" class="form-text">Nunca compartilhe o seu email com ninguém.</div>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="telefoneDocente" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefoneDocente">
          </div>
        </div>
      </div> -->

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="cepDocente" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cepDocente" name="cepDocente">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="estadoDocente" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estadoDocente" name="estadoDocente">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="ruaDocente" class="form-label">Rua</label>
            <input type="text" class="form-control" id="ruaDocente" name="ruaDocente">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="bairroDocente" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairroDocente" name="bairroDocente">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="cidadeDocente" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidadeDocente" name="cidadeDocente">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="paisDocente" class="form-label">País</label>
            <input type="text" class="form-control" id="paisDocente" name="paisDocente">
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