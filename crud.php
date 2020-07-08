<?php

function usuario()
{

    $conn = include_once('conexao/conexao.php');
    $sql = 'SELECT * FROM usuarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function cliente()
{

    $conn = include_once('conexao/conexao.php');
    $sql = 'SELECT * FROM clientes';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function administrador()
{

    $conn = include_once('conexao/conexao.php');
    $sql = 'SELECT * FROM administrador';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function cadastroCliente()
{
    $conn = include_once('conexao/conexao.php');

    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])) {


        $email = $_GET['email'];
        $senha = $_GET['senha'];
        $senhasegura = password_hash($senha, PASSWORD_DEFAULT);
        $nome = $_GET['nome'];


        $sql = "INSERT INTO clientes (nome,senha,email) VALUES('$nome','$senhasegura','$email')";
        $conn->query($sql);
    }
}


function cadastroUsuario()
{
    require_once('conexao/conexao.php');
    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])) {


        $email = $_GET['email'];
        $senha = $_GET['senha'];
        $senhasegura = password_hash($senha, PASSWORD_DEFAULT);
        $nome = $_GET['nome'];
    }

    $sql = "INSERT INTO usuarios (nome,senha,email) VALUES('$nome','$senhasegura','$email')";
    return $conn->query($sql);
}

function varredura(){
    
   
        require_once('conexao/conexao.php');
    $id = $_GET['codigo'];
    $sql = "SELECT * FROM usuarios WHERE codigo = '$id'";
    $result = $conn->query($sql);
   return $result->fetch_all(MYSQLI_ASSOC);
    
}

function update(){
    require_once('conexao/conexao.php');

   
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $id = $_GET['digito'];
    $sql = "UPDATE  usuarios SET email = '$email',nome = '$nome' WHERE codigo = '$id'";
    return $conn->query($sql);

}

function updateCliente(){
    require_once('conexao/conexao.php');

   
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $id = $_GET['digito'];
    $sql = "UPDATE  clientes SET email = '$email',nome = '$nome' WHERE codigo = '$id'";
    return $conn->query($sql);

}
function updateProduto(){
    require_once('conexao/conexao.php');

   
    $marca= $_GET['marca'];
    $preco = $_GET['preco'];
    $data = $_GET['data'];
    
    $id = $_GET['digito'];
    $sql = "UPDATE  produtos SET marca = '$marca',dtaCadastro = '$data',preco = '$preco' WHERE codigoProduto = '$id'";
    return $conn->query($sql);

}


function varredura2(){
    
   
    require_once('conexao/conexao.php');
$id = $_GET['codigo'];
$sql = "SELECT * FROM clientes WHERE codigo = '$id'";
$result = $conn->query($sql);
return $result->fetch_all(MYSQLI_ASSOC);

}

function varredura3(){
    
   
    require_once('conexao/conexao.php');
$id = $_GET['codigo'];
$sql = "SELECT * FROM produtos WHERE codigoProduto = '$id'";
$result = $conn->query($sql);
return $result->fetch_all(MYSQLI_ASSOC);

}








// function sistemaBusca(){
//     require_once('conexao/conexao.php');
//     $busca = $_GET['especifico'];
//     $sql ="SELECT marca,preco,imagem FROM produtos WHERE marca  LIKE '$busca%' ORDER BY dtaCadastro DESC ";
//     $result = $conn->query($sql);
//     while($dados = mysqli_fetch_array($result)){


     
//     echo "  
//   <div class = 'col-lg-4' style = 'margin-top:30px;'>
//     <div class='card' style='width: 18rem;'>
// <img class='card-img-top' src='img/".$dados['imagem']."' alt='Card image cap'>
// <div class='card-body'>
// <p class='card-text'>Marca: ". $dados['marca']."</p>
// <p class='card-text'>Preço: R$". $dados['preco']."</p>
// </div>
// </div>
// </div>";
       
      
    
     
//      }
//     }


// function sistemaExibicao(){
//     require_once('conexao/conexao.php');
//         $sql = "SELECT * FROM produtos ORDER BY dtaCadastro DESC";
//          $result = $conn->query($sql);
//          while($dados = mysqli_fetch_array($result)){
  
     
          
//          echo "  
//        <div class = 'col-lg-4' style = 'margin-top:30px;'>
//          <div class='card' style='width: 18rem;'>
//   <img class='card-img-top' src='img/".$dados[3]."' alt='Card image cap'>
//   <div class='card-body'>
//   <p class='card-text'>Marca: ". $dados['marca']."</p>
//   <p class='card-text'>Preço: R$ ". $dados['preco']."</p>
//   <p class='card-text'>Data: ". $dados['dtaCadastro']."</p>
//   </div>
//   </div>
//   </div>";
            
           
         
          
//           }
// }



















function cadastroProduto()
{
    $conn = include_once('conexao/conexao.php');

    if (isset($_GET['descricao']) && isset($_GET['valor'])) {
        $descricao = $_GET['descricao'];
        $valor = $_GET['valor'];
        $imagem = $_GET['imagem'];
        $data = $_GET['data'];
        $sql = "INSERT INTO produtos (marca,preco,imagem,dtaCadastro) VALUES('$descricao','$valor','$imagem','$data')";
        $conn->query($sql);
    }
}

