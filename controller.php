<?php
include_once (__DIR__.'/crud.php');
if (isset($_GET['verificar'])) {
      if ($_GET['verificar'] == 'usuario') {
        $registros = usuario();


        foreach ($registros as $registro){
            if($registro['email']==$_GET['email'] && $registro['senha']==$_GET['senha']){
            header('location:produtos.php');
                    
                    }
                  
        };
        }












#validação login

if ($_GET['verificar'] == "cliente") {
    $registros = cliente();

// $senhasegura = password_hash($senha,PASSWORD_DEFAULT);
$senha = $_GET['senha'];
// var_dump()
    foreach ($registros as $registro){
        if(password_verify($senha,$registro['senha'])){
        header('location:vendas.php');
                
                }
              
    };
        
        
        }


#login root{
        if ($_GET['verificar'] == "admin") {
            $registros = administrador();
            foreach ($registros as $registro){
                if($registro['email']==$_GET['email'] && $registro['senha']==$_GET['senha']){
                header('location:root/administracao.php'); }};
                
                
                }
#}
    }


    if(isset($_GET['comprador'])){
        cadastroCliente();
        header("location:produtos.php");
    }







    if(isset($_GET['user'])){
        cadastroUsuario();
        
    }
    if(isset($_GET['produto'])){
        cadastroProduto();
    }
    ?>
    <div class = "container">
             <div class = "row"style = "margin-top:40px">
    
             <?php     
               if(isset($_GET['busca'])){
                   cartao();
    }
    if(isset($_GET['delete'])){
       
            $conn = include_once(__DIR__.'/banco.php');
            $codigo = $_GET['id'];
            $sql = "DELETE FROM usuarios WHERE codigo = '$codigo'";
    $conn->query($sql);
        }

                       


                       ?>
     

     
             </div>
             </div>

