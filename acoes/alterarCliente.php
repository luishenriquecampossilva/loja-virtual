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
                  <th scope="col"> Nome</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Senha</th>
                 
                  
                </tr>
              </thead>
              <tbody>

<?php
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $bd = 'itatec';
    
       $conn = new mysqli($server,$user,$password,$bd);

       $sql = "SELECT * FROM clientes";
             $result = $conn->query($sql);
             while($dados = mysqli_fetch_array($result)){
     
         
              
         echo "  


             <tr>
             <td>{$dados['codigo']}</td>
             <td>{$dados['nome']}</td>
             <td>{$dados['email']}</td>
             <td>{$dados['senha']}</td>
           
             
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
  

  <button type="submit" class="btn btn-success" name = "prosseguir2">Prosseguir</button><br><br>
  


  <div class="form-group">

<label for="exampleInputEmail1">CODIGO</label>
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"name = "digito"
 value ="<?php echo $codigo ?? 0; ?>">

</div>
   <div class="form-group">

    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"name = "nome"
     value ="<?php echo $nome ?? 0; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email"name = "email"value = "<?php echo $email ?? 0; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"name = "senha">
  </div>

  <button type="submit" class="btn btn-danger"name = "updatecliente">Alterar</button>
  <a  href="../root/administracao.php" class="btn btn-primary">Sair</a>
 
          
  
</form>
          </div>





<?php
   require_once('../includes/footer.php');
   ?>