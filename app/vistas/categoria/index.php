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
               <th><a href="<?php RUTA_URL;?>categoria/edit/<?php echo $categori->idcat ; ?>" class="btn btn-warning"> Update</a></th>
              
               <th>
               <form action="<?php RUTA_URL;?>categoria/delete/<?php echo $categori->idcat;?>" method="POST"  >
               <input type="submit" value="Apagar" onclick="return deletar()" class="btn btn-danger">
             </form>
             </th>
            </tr>
            <?php endforeach ;?>
            </tbody>
           <tr> <th><a href=" <?php echo RUTA_URL;?>categoria/add" class="btn btn-primary">Addicionar</a></th> </tr>
   </table>
   <?php require RUTA_APP . '/vistas/inc/footer.php'; ?>