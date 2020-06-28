
   <?php
   require_once('includes/header.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src = "img/logo.png"></a>
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


 
 

  <!-- --->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"style = "height:400px;">





<div class = "container">
<?php
               $sql = "SELECT * FROM produtos ORDER BY dtaCadastro desc";
               $result = $conn->query($sql);
               $cont = 0;
               while($dados = mysqli_fetch_array($result)){
$cont++;

if($cont == 1){





   echo " <div class='carousel-item active'>
      <img class='d-block w-100 img-fluid' style='width: 18rem;'src='img/".$dados['imagem']."' alt='First slide'>
      <div class='carousel-caption d-none d-md-block'>
      <h5 style = 'color:black;padding-left:600px;margin-bottom:50px' >".$dados['marca']."</h5>
      <p style = 'color:gray;padding-left:600px;margin-bottom:30px'>Por apenas: R$ ".$dados['preco']."</p>
      
    </div>
    </div>";}

if($cont == 2){echo "
    <div class='carousel-item'>
      <img class='d-block w-100 img-fluid' src='img/".$dados['imagem']."' alt='Second slide'>
      <div class='carousel-caption d-none d-md-block'>
      <h5 style = 'color:black;padding-left:600px;margin-bottom:50px' >".$dados['marca']."</h5>
      <p style = 'color:gray;padding-left:600px;margin-bottom:30px'>Por apenas: R$ ".$dados['preco']."</p>
      
    </div>
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

          $sql ="SELECT marca,preco,imagem FROM produtos WHERE marca  LIKE '$busca%' ORDER BY dtaCadastro DESC ";

          $result = $conn->query($sql);
          while($dados = mysqli_fetch_array($result)){
  
      
           
          echo "  
        <div class = 'col-lg-4' style = 'margin-top:30px;'>
          <div class='card' style='width: 18rem;'>
<img class='card-img-top' src='img/".$dados['imagem']."' alt='Card image cap'>
<div class='card-body'>
<p class='card-text'>Marca: ". $dados['marca']."</p>
<p class='card-text'>Preço: R$". $dados['preco']."</p>
</div>
</div>
</div>";
             
            
          
           
           }





          }
          else{
            $sql = "SELECT * FROM produtos ORDER BY dtaCadastro DESC";
             $result = $conn->query($sql);
             while($dados = mysqli_fetch_array($result)){
     
         
              
             echo "  
           <div class = 'col-lg-4' style = 'margin-top:30px;'>
             <div class='card' style='width: 18rem;'>
<img class='card-img-top' src='img/".$dados[3]."' alt='Card image cap'>
<div class='card-body'>
 <p class='card-text'>Marca: ". $dados['marca']."</p>
 <p class='card-text'>Preço: R$ ". $dados['preco']."</p>
 <p class='card-text'>Data: ". $dados['dtaCadastro']."</p>
</div>
</div>
</div>";
                
               
             
              
              }}
        
       
                  
                  ?>

        </div>
        </div>











































































































<!-- <div class = "container">
        <h1>Comentarios</h1>

<form action="controller.php" method="get" style = "margin:auto">

<textarea type="text" id="w3review" name="comentario" rows="4" cols="100" >
 
</textarea>
  <br><br>
  <input type="submit" name = "publicar" value="publicar">
</form></div>

<div class = "container">
        
         
      
         

          $sql ="SELECT * FROM comentarios";

          $result = $conn->query($sql);
          while($dados = mysqli_fetch_array($result)){
  
      
           
          echo "  
       


<div class='card-text'>". $dados['comentarios']."<a href='vendas.php?id=".$dados['id']."'>Excluir</a></div>";
             
          
          
           
           }

        

                  
                  
        
        </div> -->

<?php
   require_once('includes/footer.php');
   ?>