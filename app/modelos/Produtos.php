<?php
 class Produtos{

    private $db;
    public function __construct() {
        $this->db = new Base;
    }

    public function obtener(){
        $this->db->query('SELECT  * From produto ');
        $result = $this->db->registros();
        return $result;
    }

    public function add($datos){
        $this->db->query('INSERT INTO produto(nome_produto, valor_produto, data_cadastro, idcat) VALUES(:nome_produto, :valor_produto, :data_cadastro ,:idcat )');
        $this->db->bind(':nome_produto', $datos['nome_produto']);
        $this->db->bind(':valor_produto', $datos['valor_produto']);
        $this->db->bind(':data_cadastro', $datos['data_cadastro']);
        $this->db->bind(':idcat', $datos['idcat']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
      
    public function actualizar($datos){
        $this->db->query('UPDATE produto SET nome_produto = :nome_produto, valor_produto = :valor_produto, data_cadastro = :data_cadastro, idcat = :idcat WHERE idpro = :idpro');
        $this->db->bind(':nome_produto', $datos['nome_produto']);
        $this->db->bind('valor_produto', $datos['valor_produto']);
        $this->db->bind('data_cadastro', $datos['data_cadastro']);
        $this->db->bind('idpro', $datos['idpro']);
        $this->db->bind('idcat', $datos['idcat']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }
 

    public function obtenerid($id){
        $this->db->query('SELECT * FROM produto WHERE idpro = :id');
        $this->db->bind(':id', $id );
        $row = $this->db->registro();
        return $row;
    }

    public function delete($id){
        $this->db->query('DELETE FROM produto WHERE idpro = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

    public function busca($busca){
      //  $busca = '%android%';
        $this->db->query('SELECT * FROM produto WHERE nome_produto LIKE :busca');
        $this->db->bind(':busca', $busca);
        $row = $this->db->registros();
        var_dump($row); die();
        return $row;
    }

 }