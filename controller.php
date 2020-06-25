<?php
include_once (__DIR__.'/crud.php');
function seila(){
    $conn = include_once(__DIR__.'/banco.php');

     $sql = "SELECT * FROM usuarios";
             $result = $conn->query($sql);
             while($dados = mysqli_fetch_array($result)){
              echo "   <tr> <td>{$dados['codigo']}</td><td>{$dados['nome']}</td><td>{$dados['email']}</td> <td>{$dados['senha']}</td></tr>";
                
               
             
              
              }
}

if (isset($_GET['verificar'])) {
      if ($_GET['verificar'] == 'usuario') {
        $registros = usuario();


        foreach ($registros as $registro){
            if($registro['email']==$_GET['email'] && $registro['senha']==$_GET['senha']){
            header('location:produtos.php');
                    
                    }
                  
        };
        }
if ($_GET['verificar'] == "cliente") {
    $registros = cliente();


    foreach ($registros as $registro){
        if($registro['email']==$_GET['email'] && $registro['senha']==$_GET['senha']){
        header('location:vendas.php');
                
                }
              
    };
        
        
        }



        if ($_GET['verificar'] == "admin") {
            $registros = administrador();
        
        
            foreach ($registros as $registro){
                if($registro['email']==$_GET['email'] && $registro['senha']==$_GET['senha']){
                header('location:administracao.php');
                        
                        }
                      
            };
                
                
                }
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
        excluirUsuario();
}
                       


                       ?>
     

     
             </div>
             </div>

