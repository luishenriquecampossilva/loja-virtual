
   <?php
   require_once('header.php');
?>
   <form action = "conexao.php" method = "get">
   <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name = "nome">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name = "email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name = "senha">
  </div>

  <button type="submit" class="btn btn-primary"name = "ca">Cadastrar</button>
 
</form>
<?php
   require_once('footer.php');
   ?>