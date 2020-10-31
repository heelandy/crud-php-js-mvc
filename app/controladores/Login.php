<?php   
    class Login extends Controlador{

        public function __construct(){
            $this->login = $this->modelo('Logi');
        }

        public function index(){

            $this->vista('paginas/login');
        }

        
        public function log(){
            $datos = [
                'nome' => trim($_POST['nome']),
                'senha' => trim($_POST['senha'])
            ];
            $login = $this->login->login($datos);
            
            if ($datos['nome'] !=$login->nome && $datos['senha'] !=$login->senha) {
                echo 'Senha o nome usuario invalido';
                redirect('paginas/singup');
            } else {
              session_start();
              $_SESSION['iduser'] = $login->iduser;
              $_SESSION['senha'] = $login->senha;
              redirect('paginas/inicio');
            }
            

        }

    }