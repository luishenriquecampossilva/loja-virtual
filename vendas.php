
   <?php
   require_once('includes/header.php');
   require_once('conexao/conexao.php');
   session_start();

   if(!isset($_SESSION['clientes'])){
    header('location:index.php');

   }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src = "img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dispositivos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acessorios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Capinhas</a>
          <a class="dropdown-item" href="#">Peliculas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">jogos</a> 
        </div>
        <li class="nav-item active">
        <a class="nav-link" href="cadastros/destruir.php">Sair <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"action ="" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Nome do PRO" aria-label="Search"name = "especifico">
      <button class="btn btn-danger" type="submit"name = "busca">Pesquisar</button>
    </form>
  </div>
</nav>

<!-- Finalizados --^ -->

<!-- Carrossel--->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"style = "height:400px;">
<div class = "container">

<?php

 include_once('selecioneProdutos.php');
?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<!-- Sistema de Pesquisa -->
        <div class = "container">
        <div class = "row"style = "margin-top:40px">
        <?php require_once('teste.php') ?>

        </div>
        </div>


 <div class = "container" style = "margin-top:30px;">
        



<?php
   require_once('includes/footer.php');
   ?>