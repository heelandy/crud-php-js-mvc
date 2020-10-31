<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="car card-body bg-light mt-5">
      <h2>Login</h2>
     <form action="<?php echo RUTA_URL;?>login/log" method="POST" name="f">
           <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" name="nome" value=""  class="form-control form-control-lg">
           </div>
           <div class="form-group">
           <label for="valor">Valor:</label>
           <input type="text" name="senha" value="" class="form-control form-control-lg">
           </div>
           
           <input type="submit" onclick = return valid() value="logar" class="btn btn-success">
     </form>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
