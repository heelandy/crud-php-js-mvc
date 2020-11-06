

<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php session_start();
 if(!$_SESSION['iduser'] and !$_SESSION['senha']){
     redirect('login');
 } ?>
<div class="car card-body bg-light mt-5">
      <h2>Editar Produto</h2><span>Addicione o produto confrome o ID da Categoria</span>
     <form action="<?php echo RUTA_URL;?>produto/edit/<?php echo $datos['idpro'] ;?>" method="POST">
           <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" name="nome_produto" value="<?php echo $datos['nome_produto'] ;?>"  class="form-control form-control-lg">
           </div>
           <div class="form-group">
           <label for="valor">Valor:</label>
           <input type="text" name="valor_produto" value="<?php echo $datos['valor_produto'] ;?>" class="form-control form-control-lg">
           </div>
           <div class="form-group">
           <label for="data">Data:</label> <span>Ex: 2020-01-01 10:10:10</span>
           <input type="datetime" name="data_cadastro" value="<?php echo $datos['data_cadastro'] ;?>" class="form-control form-control-lg" placeholder="YYYY-MM-DDThh:mm:ss">
           </div>
           <div class="form-group">
           <label for="idcastro">ID Cadastor:</label>
           <input type="number" name="idcat" value="<?php echo $datos['idcat'] ;?>" class="form-control form-control-lg">
           </div>
           <input type="submit" value="Update" class="btn btn-warning">
     </form>
</div>

   








<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
