<?PHP require_once('header.php');
require_once('controller.php'); ?>
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
include_once('banco.php');

$sql = "SELECT * FROM usuarios";
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
    <label for="exampleInputEmail1">Informe o codigo do  usuario:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "id">
    
  </div>
  
  
  <button type="submit" class="btn btn-success" name = "prosseguir">Prosseguir</button>
  
</form>
          </div>



          
   <?php
   require_once('header.php');
   require_once('controller.php');
?>
<div class = "container">
  <div class = "row">
    <div class = "col-lg-12 col-md-12 col-sm-12">
    <p style = "font-size:40px;">Aterando usuarios</p>
    </div>
    <div class = "col-lg-12 col-md-12 col-sm-12">
   <form action = "" method = "get">
   <div class="form-group">

    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"name = "nome"
     value ="">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email"name = "email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"name = "senha">
  </div>

  <button type="submit" class="btn btn-danger"name = "user">Alterar</button>
  <a  href="administracao.php" class="btn btn-primary">Sair</a>
 
</form><div><div><div>
<?php
   require_once('footer.php');
   ?>