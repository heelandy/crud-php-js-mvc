
<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php session_start();
 if(!$_SESSION['iduser'] and !$_SESSION['senha']){
     redirect('login');
 } ?>
<div class="car card-body bg-light mt-5">
      <h2>Cadastro de Categoria</h2>
     <form name="f" action="<?php echo RUTA_URL;?>categoria/add" method="POST" >
           <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" name="nomecat" value=""  class="form-control form-control-lg">
           </div>
           
           <input type="submit" onclick="return cat()"  value="Addicionar" class="btn btn-success">
     </form>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
