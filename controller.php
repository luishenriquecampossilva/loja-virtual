<?php





include_once(__DIR__ . '/crud.php');

session_start();

if (isset($_GET['verificar'])) {
    if ($_GET['verificar'] == 'usuario') {
       
        $registros = usuario();
        $senha = $_GET['senha'];
        $email = $_GET['email'];
        foreach ($registros as $registro) {
            if ($registro['email'] == $email && password_verify($senha, $registro['senha']) == true) {
                $_SESSION['usuario']= $_GET['email'];
                header('location:cadastros/produtos.php');
            }
        };
    }
    

    if ($_GET['verificar'] == "cliente") {
        
        $registros = cliente();
        $senha = $_GET['senha'];
        $email = $_GET['email'];
       
        foreach ($registros as $registro) {
            if ($registro['email'] == $email && password_verify($senha, $registro['senha']) == true) {
                $_SESSION['clientes'] = $_GET['email'];
                header('location:vendas.php');
            }
        };
    }


   
    if ($_GET['verificar'] == "admin") {
        $registros = administrador();
        foreach ($registros as $registro) {
            if ($registro['email'] == $_GET['email'] && $registro['senha'] == $_GET['senha']) {
                $_SESSION['admin']= $_GET['email'];

                header('location:root/administracao.php');
            }
        };
    }
    
}


if (isset($_GET['comprador'])) {
    cadastroCliente();
    header("location:produtos.php");
}
if (isset($_GET['user'])) {
    cadastroUsuario($_GET);
}
if (isset($_GET['produto'])) {
    cadastroProduto();
}


if (isset($_GET['prosseguir'])) {
    
    $registros = varredura();
    foreach ($registros as $registro) {
        
     };

$nome = $registro['nome'];
$email = $registro['email'];
$codigo = $registro['codigo'];

    
}

  if (isset($_GET['prosseguir2'])) {
    
    $registros = varredura2();
    foreach ($registros as $registro) {
        
     };

$nome = $registro['nome'];
$email = $registro['email'];
$codigo = $registro['codigo'];

    
}

if (isset($_GET['prosseguir3'])) {
    
    $registros = varredura3();
    foreach ($registros as $registro) {
        
     };

$marca = $registro['marca'];
$preco = $registro['preco'];
$data = $registro['dtaCadastro'];
$codigo = $registro['codigoProduto'];

    
}

  if(isset($_GET['update'])){
      
      update($_GET);
  }
  if(isset($_GET['updatecliente'])){
      
    updateCliente($_GET);
}

if(isset($_GET['updateproduto'])){
      
    updateProduto($_GET);
}


  





























?>
<div class="container">
    <div class="row" style="margin-top:40px">

        <?php
      
        if (isset($_GET['delete'])) {

            $conn = include_once('conexao/conexao.php');
            $codigo = $_GET['id'];
            $sql = "DELETE FROM usuarios WHERE codigo = '$codigo'";
            $conn->query($sql);
        }
        if (isset($_GET['deletecliente'])) {

            $conn = include_once('conexao/conexao.php');
            $codigo = $_GET['id'];
            $sql = "DELETE FROM clientes WHERE codigo = '$codigo'";
            $conn->query($sql);
        }



        ?>



    </div>
</div>