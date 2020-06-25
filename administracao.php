
   <?php
   require_once('header.php');
   
?>
<div class = "container">
  <div class = "row"style = "margin-top:60px">
<div class="card-deck">
  <div class = "col-lg-4 col-md-6 col-sm-12">
  <div class="card">
    <img src="img/group.png" class="card-img-top " alt="...">
    <div class="card-body">
      <h5 class="card-title">Usuarios</h5>
      <a href="cadastroDeUsuarios.php" class="btn btn-success">Adicionar</a>
      <a href="" class="btn btn-warning">Alterar</a>
      <a href="deletar.php" class="btn btn-danger text-white">Excluir</a>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Ultima atualização a 3 minutos.</small>
    </div>
  </div></div>
  <div class = "col-lg-4 col-md-6 col-sm-12">

  <div class="card">
    <img src="img/info.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Clientes</h5>
      <a href="cadastrarCliente.php" class="btn btn-success">Adicionar</a>
      <a href="" class="btn btn-warning">Alterar</a>
      <a href="" class="btn btn-danger text-white">Excluir</a>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Ultima atualização a 3 minutos.</small>
    </div>
  </div></div>
  <div class = "col-lg-4 col-md-6 col-sm-12">

  <div class="card">
    <img src="img/smartphone.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Produtos</h5>
      <a href="produtos.php" class="btn btn-success">Adicionar</a>
      <a href="" class="btn btn-warning">Alterar</a>
      <a href="" class="btn btn-danger text-white">Excluir</a>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Ultima atualização a 3 minutos.</small>
    </div>
  </div></div>
  
</div>
</div>

<?php
   require_once('footer.php');
   ?>