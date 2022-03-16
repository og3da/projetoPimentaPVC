<?php 
    if(isset($_POST['submit'])){
      include_once('projetoPimentaPVC/conexao.php'); // aqui estamos incluindo nosso arquivo de conexao ao banco de dados
      //Abaixo atribuímos os valores provenientes do formulário pelo método POST
      $cpf = $_POST['cpf']; 
      $nome = $_POST['nome'];
      $telefone = $_POST['tel'];
      $dtNasc = $_POST['dtNasc']; 
      $endereco = $_POST['endereco'];
      $cep = $_POST['cep'];
      $bairro = $_POST['bairro']; 
      $uf = $_POST['uf'];
      $cidade = $_POST['cidade'];
      $email = $_POST['email'];
    
      $sql = mysqli_query($conexao, "INSERT INTO tblCliente(cpf, nome, telefone, dtNasc, endereco, cep, bairro, uf, cidade, email) 
      VALUES ('$cpf', '$nome', '$telefone', '$dtNasc', '$endereco', '$cep', '$bairro', '$uf', '$cidade', '$email')");

      mysqli_close($conexao); //fecha conexão com banco de dados 
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CADASTRO CLIENTES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CADASTRAR CLIENTES</h2><hr><br>
  <form action="cadCli.php" method="POST">
    <div class="form-group"> 
      <label for="nome">Nome:</label>
      <input  class="form-control" id="nome" placeholder="digite o nome" name="nome">
    </div>
    <div class="form-group">
      <label for="cpf">CPF:</label>
      <input  class="form-control" id="cpf" placeholder="digite o CPF" name="cpf">
    </div>
    <div class="form-group">
      <label for="tel">Telefone:</label>
      <input type="tel" class="form-control" id="tel" placeholder="digite o Telefone" name="tel">
    </div>
    <div class="form-group">
      <label for="dtNasc">Data de Nascimento:</label>
      <input  class="form-control" id="dtNasc" placeholder="digite a Data de Nascimento" name="dtNasc">
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input  class="form-control" id="endereco" placeholder="digite o Endereço" name="endereco">
    </div>
    <div class="form-group">
      <label for="bairro">Bairro:</label>
      <input  class="form-control" id="bairro" placeholder="digite o Bairro" name="bairro">
    </div>
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input class="form-control" id="cep" placeholder="digite o cep" name="cep">
    </div>
    <div class="form-group">
      <label for="uf">UF:</label>
      <input  class="form-control" id="uf" placeholder="digite o UF" name="uf">
    </div>
    <div class="form-group">
      <label for="cidade">Cidade:</label>
      <input  class="form-control" id="cidade" placeholder="digite a cidade" name="cidade">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input  class="form-control" id="email" placeholder="digite o email" name="email">
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-default">ENVIAR</button>
  </form><br><br>
</div>

</body>
</html>
