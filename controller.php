<?php

#Select usuarios

function selectUser(){

}




#validação login do usuario
include_once(__DIR__ . '/crud.php');
if (isset($_GET['verificar'])) {
    if ($_GET['verificar'] == 'usuario') {
        $registros = usuario();
        $senha = $_GET['senha'];
        $email = $_GET['email'];
        foreach ($registros as $registro) {
            if ($registro['email'] == $email && password_verify($senha, $registro['senha']) == true) {
                header('location:cadastros/produtos.php');
            }
        };
    }
    #validação login cliente

    if ($_GET['verificar'] == "cliente") {
        $registros = cliente();
        $senha = $_GET['senha'];
        $email = $_GET['email'];
       
        foreach ($registros as $registro) {
            if ($registro['email'] == $email && password_verify($senha, $registro['senha']) == true) {
                header('location:vendas.php');
            }
        };
    }


    #login root{
    if ($_GET['verificar'] == "admin") {
        $registros = administrador();
        foreach ($registros as $registro) {
            if ($registro['email'] == $_GET['email'] && $registro['senha'] == $_GET['senha']) {
                header('location:root/administracao.php');
            }
        };
    }
    #}
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

#alterar usuario{
if (isset($_GET['prosseguir'])) {
    
    $registros = varredura();
    foreach ($registros as $registro) {
        
     };

$nome = $registro['nome'];
$email = $registro['email'];
$codigo = $registro['codigo'];

    
}
  #}

  if(isset($_GET['update'])){
      
      update($_GET);
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




        ?>



    </div>
</div>