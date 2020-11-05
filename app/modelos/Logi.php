<?php 
 class Logi{
   
    private $db;
    public function __construct(){
        $this->db = new Base;
    }


    public function login($datos){
     $this->db->query('SELECT * FROM user WHERE nome =:nome AND senha = :senha');
     $this->db->bind(':nome', $datos['nome']);
     $this->db->bind(':senha', $datos['senha']);
     $result = $this->db->registro();
     return $result;
    }
    
 }