<?php

if(isset($_GET['busca'])){
    $busca = $_GET['especifico'];

    $sql ="SELECT marca,preco,imagem,dtaCadastro FROM produtos WHERE marca  LIKE '$busca%' ORDER BY dtaCadastro DESC ";

    $result = $conn->query($sql);
    while($dados = mysqli_fetch_array($result)){


     
    echo "  
  <div class = 'col-lg-4' style = 'margin-top:30px;'>
    <div class='card' style='width: 18rem;'>
<img class='card-img-top' src='img/".$dados['imagem']."' alt='Card image cap'>
<div class='card-body'>
<p class='card-text'>Marca: ". $dados['marca']."</p>
<p class='card-text'>Preço: R$". $dados['preco']."</p>
<p class='card-text'>Data de cadastro: ". $dados['dtaCadastro']."</p>

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
      
