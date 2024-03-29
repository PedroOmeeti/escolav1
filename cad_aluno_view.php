<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <title>Cadastro Aluno</title>
</head>

<body>
  <?php 
    require_once ('menu.html');
  ?>

  <div class="h1 text-center bg-dark text-white p-3">Cadastro Aluno</div>
  <div class="container">
    <form action="./controller/cad_aluno.php" method="post">

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="nomeAluno" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeAluno" name="nomeAluno">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="cpfAluno" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpfAluno" name="cpfAluno">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="datanascAluno" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="datanascAluno" name="datanascAluno">
            
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="tel1Aluno" class="form-label">Telefone</label>
            <input placeholder="Exemplo: (12)12345-6789" type="text" class="form-control" id="tel1Aluno" name="tel1Aluno">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="tel2Aluno" class="form-label">Segundo Telefone</label>
            <input placeholder="Exemplo: (12)12345-6789" type="text" class="form-control" id="tel2Aluno" name="tel2Aluno">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="cepAluno" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cepAluno" name="cepAluno">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="estadoAluno" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estadoAluno" name="estadoAluno">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="ruaAluno" class="form-label">Rua</label>
            <input type="text" class="form-control" id="ruaAluno" name="ruaAluno">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="bairroAluno" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairroAluno" name="bairroAluno">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="cidadeAluno" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidadeAluno" name="cidadeAluno">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="paisAluno" class="form-label">País</label>
            <input type="text" class="form-control" id="paisAluno" name="paisAluno">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>



  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> -->

    <?php 
      require_once('alertas.php');   
    ?>

</body>

</html>