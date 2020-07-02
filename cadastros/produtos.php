
   <?php
   require_once('../includes/header.php');
   require_once('../controller.php');
  
   session_start();

   if(!isset($_SESSION['usuario'])){
    header('location:../index.php');

   }
?>

<div class = "container">
  <div class = "row">
  <div class = "col-lg-12 col-md-12 col-sm-12">
<p style = "font-size:40px;">Cadastro de Produtos</p><div>
   <form action = "" method = "get"enctype="multipart/form-data">
   <div class="form-group">
    <label for="exampleInputEmail1">Descricao</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Marca"name = "descricao">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor"name = "valor">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Imagem</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome.extensão"name = "imagem">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">data</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""name = "data">

  </div>


  <button type="submit" class="btn btn-danger"name = "produto">Cadastrar</button>
  <a href="destruir.php" class="btn btn-primary stretched-link">Sair</a>
 
</form><div></div>
<?php
   require_once('../includes/footer.php');
   ?>