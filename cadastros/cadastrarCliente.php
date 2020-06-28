
   <?php
   require_once('../includes/header.php');
   require_once('../controller.php');
?>
<div class = "container">
  <div class = "row">
    <div class = "col-lg-12 col-md-12 col-sm-12">
    <p style = "font-size:40px;">Cadastro de Clientes</p>
    </div>
    <div class = "col-lg-12 col-md-12 col-sm-12">
   <form action = "" method = "get">
   <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"name = "nome">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email"name = "email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"name = "senha">
  </div>

  <button type="submit" class="btn btn-danger"name = "comprador">Cadastrar</button>
  <a href="../index.php" class="btn btn-primary stretched-link">Voltar</a>

 
</form><div><div><div>
<?php
   require_once('../includes/footer.php');
   ?>