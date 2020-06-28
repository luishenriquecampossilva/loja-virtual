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

