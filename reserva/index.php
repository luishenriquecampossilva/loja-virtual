
   <?php
   require_once('header.php');
?>
<div class = "container">
    <div class="row">
      <div class="col-lg-12">
        <div class = "corpo">
  <form action = "conexao.php" method = "get"class="formulario">
     <div style = "margin:auto"><center><img src = "logo.png"></center></div>
   <select name = "verificar" class="form-control form-control-lg">
  <option value = "">Selecione</option>
  <option value = "usuario">Usuario</option>
  <option value = "cliente">Cliente</option>
</select>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name = "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password"name = "senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn bg-danger"><span class = "text-light">Entrar</span></button>
  <div class ="row">
    <div class = "col-12">
      <br>
  <a href="cadastrarCliente.php"style = "text-decoration:underline;color:black;font-style:italic">cadastrar Cliente</a></div>
  <!-- <div class = "col-12"> 
  <a href="cadastroDeUsuarios.php">cadastrar Usuario</a></div> -->
  <div>
</form>
</div>
</div></div></div>
<?php
   require_once('footer.php');
   ?>