<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    // if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/perigo_class.php');

        $c = new Brutal();


        $c->CriarBanco();

        $c->CriarClientes();

        $c->CriarPedidos();

} 
?>