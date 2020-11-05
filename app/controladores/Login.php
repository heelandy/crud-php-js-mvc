<?php   
    class Login extends Controlador{

        public function __construct(){
            $this->login = $this->modelo('Logi');
        }

        public function index(){

            $this->vista('paginas/login');
        }

        
        public function log(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'nome' => trim($_POST['nome']),
                'senha' => trim($_POST['senha'])
            ];
            $logn = $this->login->login($datos);
            
            if ($datos['nome'] = $logn->nome && $datos['senha'] =$logn->senha) {
                session_start();
                redirect('home');
              $_SESSION['iduser'] = $logn->iduser;
              $_SESSION['senha'] = $logn->senha;
                
            }else {
                redirect('login');
            }
        } else {
            $datos = [
                'nome' => '',
                'senha' => ''
            ];
            die('...');
            $this->vista('paginas/login', $datos);
        }

        }



    }