
   <?php
   require_once('header.php');
?>
   <form action = "conexao.php" method = "get"enctype="multipart/form-data">
   <div class="form-group">
    <label for="exampleInputEmail1">Descricao</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name = "descricao">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name = "valor">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Imagem</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name = "imagem">

  </div>


  <button type="submit" class="btn btn-primary"name = "pr">Cadastrar</button>
 
</form>
<?php
   require_once('footer.php');
   ?>