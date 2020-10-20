<?php
    class Produto extends Controlador{
     
        public function __construct(){
            $this->produto = $this->modelo('Produtos');
        } 

        public function index(){
         $produto = $this->produto->obtener();

         $datos = [
             'produto' => $produto
         ];
         $this->vista('produto/index', $datos);

        }


        public function add(){
          
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $datos = [
                    'nome_produto'=> trim($_POST['nome_produto']),
                    'valor_produto'=> trim($_POST['valor_produto']),
                    'data_cadastro'=> trim($_POST['data_cadastro']),
                    'idcat'=> trim($_POST['idcat'])
                ];

                if ($this->produto->add($datos)) {
                    redirect('produto');
                } else {
                   die('...');
                }
                
            } else {
                $datos = [
                    'nome'=> '',
                    'valor'=> '',
                    'data'=>  '',
                    'idcat'=>  '' 
                ];
                $this->vista('paginas/inicio' , $datos);
            }
            

        }



        public function edit($id){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
               $datos =[
                   'idpro' => $id,
                   'nome_produto' => trim($_POST['nome_produto']),
                   'valor_produto' =>trim($_POST['valor_produto']),
                   'data_cadastro' =>trim($_POST['data_cadastro']),
                   'idcat' =>trim($_POST['idcat'])      
               ];
               if ($this->produto->actualizar($datos)) {
                    redirect('produto');
                } else {
                   die('....');
               }
               

            } else {
                $produto = $this->produto->obtenerid($id);
                $datos = [
                    'idpro' => $produto->idpro,
                    'nome_produto' => $produto->nome_produto,
                    'valor_produto' => $produto->valor_produto,
                    'data_cadastro' => $produto->data_cadastro,
                    'idcat' => $produto->idcat 
                ];

                $this->vista('produto/edit', $datos);
            }
            
       
        }


       public function delete($id){
         
        if ($_SERVER['REQUEST_METHOD']= 'POST') {
            $produto = $this->produto->obtener($id);

              if($this->produto->delete($id)) {
                  redirect('produto');
              } else {
                  die('....');
              }
              
        } else {
            redirect('produto');
        }
        



       }

        public function busca(){
           
           $busca = trim($_POST['busca']);
           $busca = $this->produto->busca($busca);

           $datos = [
               'busca' => $busca
           ];
           
           $this->vista('produto/busca', $datos);

            


            }
            
        




   
            





 }