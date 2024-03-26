<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    // if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/aluno_class.php');

 

        // Instanciar um obj do tipo contato:
        $c = new Aluno();

 

        // Definir os valores das suas propriedades:
        $c->nome = $_POST['nomeAluno'];
        $c->cpf = $_POST['cpfAluno'];
        $c->data_nasc = $_POST['datanascAluno'];
        $c->tel1 = $_POST['tel1Aluno'];
        $c->tel2 = $_POST['tel2Aluno'];
        $c->cep = $_POST['cepAluno'];
        $c->estado = $_POST['estadoAluno'];
        $c->rua = $_POST['ruaAluno'];
        $c->bairro = $_POST['bairroAluno'];
        $c->cidade = $_POST['cidadeAluno'];
        $c->pais = $_POST['paisAluno'];
        
 

 

        try{
            $c->Inserir();
            // header('Location: ../view/cad_aluno_view.php?msg=6');
            header('Location: ../cad_aluno_view.php?msg=7');
            exit();

 

 

        }catch(PDOException $e) {
            header('Location: ../cad_aluno_view.php?erro=7');

 


        }

 


        // echo "Contato cadastrado com sucesso!";
        // Redirecionar o jovem de volta à agenda:       
        
        
    //     echo '
    //     <script> 
    //       alert("cadastro realizado com sucesso !!!" );
         
    //   </script>';
      
      echo '<script>window.location.href = "../view/cad_docente_view.php";</script>';

 

        // header('Location: ../cad_docente.html');
        // exit();
    // }else{
    //     echo "Você precisa estar logado e essa página deve ser carregada por POST!";
    // 
}

 


?>