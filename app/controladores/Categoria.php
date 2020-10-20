<?php   

    class Categoria  extends Controlador{
      
        public function __construct(){
            $this->categori = $this->modelo('Catego');
        }

        public function index(){
         $categori = $this->categori->obtener();

         $datos = [
            'test' => $categori
         ];

         $this->vista('categoria/index', $datos);


        }

       public function add(){
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $datos =[
                  'nomecat' => trim($_POST['nomecat'])
              ];
              if ($this->categori->add($datos)) {
                  redirect('home');
              } else {
                die('nao inserido');
              }
              

           } else {
               $datos = [
                   'nomecat' => ''
               ];
               $this->vista('categoria/add', $datos);
           }
           
       }

        public function edit($id){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $datos = [
                    'idcat' => $id,
                    'nomecat' => trim($_POST['nomecat'])
                ];
                if ($this->categori->actualizar($datos)) {
                    redirect('categoria');
                } else {
                    die('.....');
                }

            } else {
                $catedit = $this->categori->obtenerid($id);
               
                $datos = [
                    'idcat' => $catedit->idcat,
                    'nomecat' => $catedit->nomecat
                ];
                
                $this->vista('categoria/edit', $datos);
            }
        }


        public function delete($id){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $categori = $this->categori->obtenerid($id);
                
                if ($this->categori->delete($id)) {
                    redirect('categoria');
                } else {
                    die('.....');
                }
             } else {
               
                redirect('categoria');
            }
            
        }


    }