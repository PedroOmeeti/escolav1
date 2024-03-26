<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    // if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/matricula_class.php');
 
 
 
        // Instanciar um obj do tipo contato:
        $c = new Matricula();
 
 
 
         // Definir os valores das suas propriedades:
         $c->nome = $_POST['matriculaAluno'];
         $c->cursoFK = $_POST['matriculaCurso'];
         $c->docenteFK = $_POST['matriculaCursp'];
         $c->codigoMatricula = $_POST['codigoMatricula'];
         $c->data = $_POST['dataMatricula'];
         $c->status = $_POST['statusMatricula'];
      
 
 
 
 
        try{
            $c->Inserir();
            header('Location: ../cad_matricula.html?msg=6');
            exit();
 
 
 
 
 
        }catch(PDOException $e) {
            header('Location: ../cad_matricula.html?erro=5');
            exit();
 
 
 
 
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