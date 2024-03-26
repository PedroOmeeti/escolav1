<?php
require_once('banco_class.php');

 

class Aluno{
    // Atributos:
    public $id;
    public $nome;
    public $cpf;
    public $data_nasc;
    public $tel1;
    public $tel2;

    public $rua;
    public $bairro;
    public $cidade;
    public $estado;
    public $pais;
    public $cep;
    

 

    // Ações (super poderes da classe):
    public function Inserir(){
        $sql = "CALL cad_aluno(?,?,?,?,?,?,?,?,?,?,?)";
        // Trabalhar com o banco:
        // Conectando:
        $banco = Banco::conectar();
        // Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        // Executar e subsitituir os coringas (?):
        $comando->execute(array($this->nome, $this->cpf, $this->data_nasc,$this->tel1, $this->tel2, $this->rua , $this->bairro, $this->cidade, $this->estado, $this->pais, $this->cep));
        // Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM docente";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }



    public function ListarCpf(){
        $banco = Banco::conectar();
        // $sql = "SELECT * FROM docente";
        $sql = "SELECT * FROM `aluno` WHERE cpf_aluno = ?";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->cpf));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }



 

    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM docente WHERE id_docente = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        echo "Registro deletado com sucesso $this->id"; 
        return $comando->rowCount();
     
    }

 

    public function Atualizar(){
        $banco = Banco::conectar();
        $sql = "UPDATE aluno SET nome_docente = ?, email_docente = ?, telefone_docente = ? WHERE id_docente = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        // $comando->execute(array($this->nome, $this->email, $this->telefone, $this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas alteradas:
        return $comando->rowCount();
    }

 

    public function BuscarPorID(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM contatos WHERE id = ?";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
}
?>