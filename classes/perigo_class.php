<?php
require_once('banco_class.php');

 

class Brutal{
    // Atributos:
    public $id;
    

  
    public function CriarBanco(){
      $sql = "CREATE DATABASE tifood;
      )";
      // Trabalhar com o banco:
      // Conectando:
      $banco = Banco::conectar();
      // Transformar a string em comando sql:
      $comando = $banco->prepare($sql);
      // Executar e subsitituir os coringas (?):
      $comando->execute();
      // Desconectar do banco:
      Banco::desconectar();
  }
 

    // Ações (super poderes da classe):
    public function CriarClientes(){
        $sql = "CREATE TABLE tifood.clientes (
          id INT PRIMARY KEY AUTO_INCREMENT, 
          nome VARCHAR(50) NOT NULL, 
          email VARCHAR(100) NOT NULL,
          telefone VARCHAR(20)
        )";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute();
        // Desconectar do banco:
        Banco::desconectar();
    }
    
    public function CriarPedidos(){
      $sql = "CREATE TABLE tifood.pedidos (
        id INT PRIMARY KEY AUTO_INCREMENT, 
        cliente_id INT NOT NULL, 
        data_pedido DATE,
        valor_total DECIMAL(10, 2),
        FOREIGN KEY (cliente_id) REFERENCES clientes(id)
      )";
      // Trabalhar com o banco:
      // Conectando:
      $banco = Banco::conectar();
      // Transformar a string em comando sql:
      $comando = $banco->prepare($sql);
      // Executar e subsitituir os coringas (?):
      $comando->execute();
      // Desconectar do banco:
      Banco::desconectar();
  }
}
?>