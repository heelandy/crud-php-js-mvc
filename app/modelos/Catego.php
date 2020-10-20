<?php   
    class Catego{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }


        public function obtener(){
            $this->db->query('SELECT * FROM categoria');
            $result = $this->db->registros();
            return $result;
        }

        public function add($datos){
            $this->db->query('INSERT INTO categoria(nomecat) value(:nomecat)');
            $this->db->bind(':nomecat', $datos['nomecat']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }

        public function obtenerid($id){
            $this->db->query('SELECT * FROM categoria WHERE idcat = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->registro();
            return $row;
        }

        public function actualizar($datos){
            $this->db->query('UPDATE categoria SET nomecat = :nomecat WHERE idcat = :idcat ');
            $this->db->bind(':idcat', $datos['idcat']);
            $this->db->bind('nomecat', $datos['nomecat']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }

        public function delete($id){
            $this->db->query('DELETE FROM categoria WHere idcat = :id');
            $this->db->bind(':id', $id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }
       
    }