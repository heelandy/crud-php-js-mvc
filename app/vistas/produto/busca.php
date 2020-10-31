<?php 
      session_start(); 
      if (!$_SESSION['iduser'] ) {
            redirect('paginas/login');
      };?>
<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<table class="table">
<thead>
          <tr>
              <th>ID</th>
              <th>Categoria</th>
              <th>Data</th>
              <th>Nome</th>
              <th>Valor</th>
          </tr>
      </thead>
  <tbody>
  <?php foreach($datos['busca'] as $busca) :?>
      <tr>
         <th><?php echo $busca->idpro;?></th>
         <th><?php  echo $busca->idcat;?></th>   
         <th><?php echo $busca->data_cadastro;?></th> 
         <th><?php echo $busca->nome_produto;?></th>        
         <th><?php echo $busca->valor_produto;?></th> 
         </tr>
     <?php endforeach;?>
    </tbody>
  </table>
  
<?php require RUTA_APP . '/vistas/inc/footer.php';?>