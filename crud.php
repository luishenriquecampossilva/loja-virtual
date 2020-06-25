<?php
#Login do usuario{
function usuario(){

    $conn = include_once(__DIR__.'/banco.php');
    $sql = 'SELECT * FROM usuarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);

}
#}

#login do cliente{
function cliente(){

    $conn = include_once(__DIR__.'/banco.php');
    $sql = 'SELECT * FROM clientes';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);

}
#}

#login do cliente{
    function administrador(){

        $conn = include_once(__DIR__.'/banco.php');
        $sql = 'SELECT * FROM administrador';
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    
    }
    #}

#cadastro do cliente{
    function cadastroCliente(){
        $conn = include_once(__DIR__.'/banco.php');

    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])) {
        
        
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        $nome = $_GET['nome'];


        $sql = "INSERT INTO clientes (nome,senha,email) VALUES('$nome','$senha','$email')";
$conn->query($sql);}
    }

#}





// function publicar(){
//     require_once('banco.php');

//     $comentario = $_GET['comentario'];
 


// $sql = "INSERT INTO comentarios (comentarios) VALUES('$comentario')";
//  $conn->query($sql);
//  return header('location:vendas.php');

// }








function cadastroUsuario(){
    require_once('banco.php');
if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])) {
    
    
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $nome = $_GET['nome'];
}

$sql = "INSERT INTO usuarios (email,senha,nome) VALUES('$nome','$senha','$email')";
return $conn->query($sql);}




function carrossel(){
    $conn = include_once(__DIR__.'/banco.php');
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
}



function cadastroProduto(){
    $conn = include_once(__DIR__.'/banco.php');
    
    if(isset($_GET['descricao'])&&isset($_GET['valor'])){
        $descricao = $_GET['descricao'];
        $valor = $_GET['valor'];
        $imagem = $_GET['imagem'];
        $data = $_GET['data'];
    $sql = "INSERT INTO produtos (marca,preco,imagem,dtaCadastro) VALUES('$descricao','$valor','$imagem','$data')";
        $conn->query($sql);}
}

function cartao(){
    require_once('banco.php');

    $sql ="SELECT descricao,valor,imagem FROM produtos WHERE ESCOLA  LIKE '%$limpo%'";
    $result = $conn->query($sql);
    while($dados = mysqli_fetch_array($result)){
    echo "  
  <div class = 'col-lg-4'>
    <div class='card' style='width: 18rem;'>
<img class='card-img-top' src='img/".$dados['imagem']."' alt='Card image cap'>
<div class='card-body'>
<p class='card-text'>Marca: ". $dados['descricao']."</p>
<p class='card-text'>Preço: R$". $dados['valor']."</p>
</div>
</div>
</div>";
       
      
    
     
     }
}

?>