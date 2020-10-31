<?php 
      session_start(); 
      if (!$_SESSION['iduser'] ) {
            redirect('paginas/login');
      };?>
<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<div class="car card-body bg-light mt-5">
      <h2>Editar Categoria</h2>
     <form action="<?php echo RUTA_URL;?>categoria/edit/<?php echo $datos['idcat'] ;?>" method="POST">
           <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" name="nomecat" value="<?php echo $datos['nomecat'];?>"  class="form-control form-control-lg">
           </div>
           <input type="submit" value="Update" class="btn btn-warning">
     </form>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
