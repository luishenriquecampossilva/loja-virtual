<?PHP 
require_once('../includes/header.php');
require_once('../controller.php');
require_once('../conexao/conexao.php');
 ?>
<div class = "container">
<div style="margin: 10vh auto">
            <table border="1" style="width: 100%;" class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col"> Marca</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Data de Cadastro</th>
                 
                  
                </tr>
              </thead>
              <tbody>

<?php
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $bd = 'itatec';
    
       $conn = new mysqli($server,$user,$password,$bd);

       $sql = "SELECT * FROM produtos";
             $result = $conn->query($sql);
             while($dados = mysqli_fetch_array($result)){
     
         
              
         echo "  


             <tr>
             <td>{$dados['codigoProduto']}</td>
             <td>{$dados['marca']}</td>
             <td>{$dados['preco']}</td>
             <td>{$dados['dtaCadastro']}</td>
           
             
         </tr>";
                
               
             
              
              }
    ?>

</tbody>
            </table>
          </div>


      
<form action = "" method = "get">
  <div class="form-group">
    <label for="exampleInputEmail1">Informe o codigo do  Cliente:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "codigo">
    
  </div>
  

  <button type="submit" class="btn btn-success" name = "prosseguir3">Prosseguir</button><br><br>
  


  <div class="form-group">

<label for="exampleInputEmail1">CODIGO</label>
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"name = "digito"
 value ="<?php echo $codigo ?? 0; ?>">

</div>
   <div class="form-group">

    <label for="exampleInputEmail1">Marca</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"name = "marca"
     value ="<?php echo $marca ?? 0; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preco</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email"name = "preco"value = "<?php echo $preco ?? 0; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Senha"name = "data" value = "<?php echo $data ?? 0; ?>">
  </div>

  <button type="submit" class="btn btn-danger"name = "updateproduto">Alterar</button>
  <a  href="../root/administracao.php" class="btn btn-primary">Sair</a>
 
          
  
</form>
          </div>





<?php
   require_once('../includes/footer.php');
   ?>