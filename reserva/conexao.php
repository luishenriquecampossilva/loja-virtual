<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'itatec';

    $conn = new mysqli($server,$user,$password,$bd);
    if(isset($_GET['ca'])){

        if(isset($_GET['nome'])&&isset($_GET['email'])&&isset($_GET['senha'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $senha = $_GET['senha'];}

    $sql = "INSERT INTO clientes (nome,email,senha) VALUES('$nome','$email','$senha')";
        $conn->query($sql);}



        if(isset($_GET['pr'])){
         
        

            if(isset($_GET['descricao'])&&isset($_GET['valor'])){

           

            $descricao = $_GET['descricao'];
            $valor = $_GET['valor'];
            $imagem = $_GET['imagem'];
            
        
        
    
        $sql = "INSERT INTO produtos (descricao,valor,imagem) VALUES('$descricao','$valor','$imagem')";
            $conn->query($sql);}}






        if(isset($_GET['verificar'])){
            if($_GET['verificar']=='usuario'){
                $sql = 'SELECT * FROM usuarios';
                $result = $conn->query($sql);
                $dados = mysqli_fetch_array($result);



                while($dados = mysqli_fetch_array($result)){
                    if($dados['email']==$_GET['email'] && $dados['senha']==$_GET['senha']){
                        header('location:produtos.php');
                    }
                    
                    
                    
                    else{
                        header('location:index.php');
                    }
} 






                
            }






            if($_GET['verificar']=='cliente'){
                $email = $_GET['email'];
                $senha = $_GET['senha'];
                $sql = "SELECT email,senha FROM clientes WHERE email = '$email' and senha = '$senha' ";
                $result = $conn->query($sql);
                $dados = mysqli_fetch_array($result);
                while($dados = mysqli_fetch_array($result)){
                    if($dados['email']==$_GET['email'] && $dados['senha']==$_GET['senha']){
                        header('location:vendas.php');
                    }
                    
                    
                    
                    else{
                        header('location:index.php');
                    }
} 






                
            }





























        }
 else{
                        header('location:index.php');
                    }

        ?>
                    <?php
                    $server = 'localhost';
                    $user = 'root';
                    $password = '';
                    $bd = 'itatec';
                
                    $conn = new mysqli($server,$user,$password,$bd);
                
         ?>
 
         <div class = "container">
         <div class = "row"style = "margin-top:40px">
         <?php     
           if(isset($_GET['busca'])){
                $sql ="SELECT descricao,valor,imagem FROM produtos WHERE ESCOLA  LIKE '%$limpo%'";

                 $result = $conn->query($sql);
                 while($dados = mysqli_fetch_array($result)){
         
             
                  
                 echo "  
               <div class = 'col-lg-4'>
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