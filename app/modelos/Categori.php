<?php   
    class Categori{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }


        public function obtener(){
            $this->db->query('SELECT * FROM categoria');
            $result = $this->db->registros();
            return $result;
        }
    }