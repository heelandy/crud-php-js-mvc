<?php 
      session_start(); 
      if (!$_SESSION['iduser'] ) {
            redirect('paginas/login');
      };?>
<?php require RUTA_APP.'/vistas/inc/header.php';?>

<table class="table">
<thead>
          <tr>
              <th>ID</th>
              <th>Categoria</th>
              <th>Data</th>
              <th>Nome</th>
              <th>Valor</th>
              <th>Acciones</th>
          </tr>
      </thead>
  <tbody>
  <?php foreach($datos['produto'] as $produto) :?>
      <tr>
         <th><?php echo $produto->idpro ;?></th>
        <th><?php echo $produto->idcat ;?></th>   
         <th><?php echo $produto->data_cadastro;?></th> 
         <th><?php echo $produto->nome_produto ;?></th>        
         <th><?php echo $produto->valor_produto ;?></th>        
         <th><a href="<?php RUTA_URL;?>produto/edit/<?php echo $produto->idpro ; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></th>
         <th>
            <form action="<?php RUTA_URL;?>produto/delete/<?php echo $produto->idpro;?>" method="POST"  >
            <i class="fa fa-trash" aria-hidden="true"></i>  <input type="submit" value="Apagar" onclick="return deletar()" class="btn btn-danger">
             </form>
            </th>

              
      </tr>
      <?php endforeach ;?>
  </tbody>

  <?php require RUTA_APP.'/vistas/inc/footer.php';?>

  