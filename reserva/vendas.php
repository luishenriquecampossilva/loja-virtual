
   <?php
   require_once('header.php');
?>

 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src = "logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
     
    </ul>
    <form class="form-inline my-2 my-lg-0"action ="" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" aria-label="Search"name = "especifico">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"name = "busca">Pesquisar</button>
    </form>
  </div>
</nav>

<?php
                   $server = 'localhost';
                   $user = 'root';
                   $password = '';
                   $bd = 'itatec';
               
                   $conn = new mysqli($server,$user,$password,$bd);
               
        ?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">





<div class = "container">
<?php
               $sql = "SELECT * FROM produtos ORDER BY descricao ASC";
               $result = $conn->query($sql);
               $cont = 0;
               while($dados = mysqli_fetch_array($result)){
$cont++;

if($cont == 1){

   echo " <div class='carousel-item active'>
      <img class='d-block w-100 img-fluid' src='".$dados['imagem']."' alt='First slide'>
    </div>";}

if($cont == 2){echo "
    <div class='carousel-item'>
      <img class='d-block w-100 img-fluid' src='".$dados['imagem']."' alt='Second slide'>
    </div>"
  ;}}
 
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






















        <div class = "container">
        <div class = "row"style = "margin-top:40px">
        <?php    
        if(isset($_GET['busca'])){
          $busca = $_GET['especifico'];

          $sql ="SELECT descricao,valor,imagem FROM produtos WHERE descricao  LIKE '$busca%'";

          $result = $conn->query($sql);
          while($dados = mysqli_fetch_array($result)){
  
      
           
          echo "  
        <div class = 'col-lg-4' style = 'margin-top:30px;'>
          <div class='card' style='width: 18rem;'>
<img class='card-img-top' src='".$dados['imagem']."' alt='Card image cap'>
<div class='card-body'>
<p class='card-text'>Marca: ". $dados['descricao']."</p>
<p class='card-text'>Preço: R$". $dados['valor']."</p>
</div>
</div>
</div>";
             
            
          
           
           }



        }
        else{
               $sql = "SELECT * FROM produtos ORDER BY descricao ASC";
                $result = $conn->query($sql);
                while($dados = mysqli_fetch_array($result)){
        
            
                 
                echo "  
              <div class = 'col-lg-4' style = 'margin-top:30px;'>
                <div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='".$dados['imagem']."' alt='Card image cap'>
  <div class='card-body'>
    <p class='card-text'>Marca: ". $dados['descricao']."</p>
    <p class='card-text'>Preço: R$". $dados['valor']."</p>
  </div>
  </div>
</div>";
                   
                  
                
                 
                 }}
                  
                  ?>

        </div>
        </div>
<?php
   require_once('footer.php');
   ?>