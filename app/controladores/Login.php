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
              $_SESSION['iduser'] = $logn->nome;
              $_SESSION['senha'] = $logn->senha;
              redirect('home');
                
            }else {
                unset ($_SESSION['iduser']);
                unset ($_SESSION['senha'] );
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