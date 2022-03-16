<?php 
    if(isset($_POST['submit'])){
      include_once('projetoPimentaPVC/conexao.php'); // aqui estamos incluindo nosso arquivo de conexao ao banco de dados
    
      // AQUI DEVE CONSTAR UM SELECT OU A VIEW QUE CONTEM OS DADOS IMPORTANTES DE CONTATO. 
      // TAMBEM FAZER UM BOTAO PARA MANDAR OS CONTATOS PARA IMPRESSÃO

      mysqli_close($conexao); //fecha conexão com banco de dados mysqli_query($conexao, 
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>IMPRESSAO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="home.html">PIMENTA PVC</a>
      </div>
      <ul class="nav navbar-nav">
      <li><a href="home.html">HOME</a></li>
      <li><a href="cadastro.html" target="_blank">CADASTRO</a></li>
      <li class="active"><a href="impressao.html" target="_blank">IMPRESSAO</a></li>
      </ul>
  </div>
</nav>

<div class="container">
  <h1>IMPRESSAO DE CONTATOS</h1>
  <hr>
  <h3>DA IMPRESSORA MATRICIAL</h3><br>
  
</div>

</body>
</html>
