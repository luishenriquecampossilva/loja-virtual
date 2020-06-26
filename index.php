<?php
require_once('includes/header.php');
require_once('controller.php');
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="corpo">
        <form action="" method="get" class="formulario">
          <div style="margin:auto">
            <center><img src="img/logo.png"></center>
          </div>


          <select name="verificar" class="form-control form-control-lg">
            <option value="">Selecione</option>
            <option value="usuario">Usuario</option>
            <option value="cliente">Cliente</option>
            <option value="admin">Administrador</option>
            
          </select>


          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          </div>

          <input type="submit" class="btn bg-danger text-light" name = "entrar" value="Entrar">


            <div>
        </form>
        <div class="row">
            <div class="col-12">
              <br>
              <a href="cadastros/cadastrarCliente.php" style="text-decoration:underline;color:black;font-style:italic">cadastrar Cliente</span></a></div>
      </div>
    </div>
  </div>
</div>
<?php
require_once('includes/footer.php');
?>