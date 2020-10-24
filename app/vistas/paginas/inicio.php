<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<table class="table">
  <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
            </tr>
        </thead>
    <tbody>
    <?php foreach($datos['test'] as $categori) :?>
        <tr>
           <th><?php echo $categori->idcat ;?></th>
           <th><?php echo $categori->nomecat ;?></th>     
        </tr>
        <?php endforeach ;?>
        <th><a href=" <?php echo RUTA_URL;?>categoria" class="btn btn-primary">Pagina Categoria</a></th>  
    </tbody>
  </table>
  

<div class="car card-body bg-light mt-5">
      <h2>Cadasto de Produto</h2><span>Addicione o produto confrome o ID da Categoria</span>
     <form action="<?php echo RUTA_URL;?>produto/add" method="POST" name="f">
           <div class="form-group">
           <label for="nome">Nome:</label>
           <input type="text" name="nome_produto" value=""  class="form-control form-control-lg">
           </div>
           <div class="form-group">
           <label for="valor">Valor:</label>
           <input type="text" name="valor_produto" value="" class="form-control form-control-lg">
           </div>
           <div class="form-group">
           <label for="data">Data:</label> <span>Ex: 2020-01-01 10:10:10</span>
           <input type="datetime" name="data_cadastro" value="" class="form-control form-control-lg" placeholder="YYYY-MM-DDThh:mm:ss">
           </div>
           <div class="form-group">
           <label for="idcastro">ID Cadastor:</label>
           
            <select name="idcat" class="form-control form-control-lg">
            <option value="" >Selectione uma Categoria</option>
            <?php foreach($datos['test'] as $categori) :?>
            
            <option value="<?php echo $categori->idcat ;?>"><?php echo $categori->nomecat ;?></option>

            <?php endforeach ;?>
            
            </select>

           
           </div>
           <input type="submit" onclick = return valid() value="Addicionar" class="btn btn-success">
     </form>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
