<?php
	
	class Home extends Controlador{

		
    
		public function __construct(){
			$this->categori = $this->modelo('Categori');
		}
	
		public function index(){
			$categori = $this->categori->obtener();
			
			$datos = [
				'test' => $categori
			];
			$this->vista('paginas/inicio', $datos);
		}
		
	}