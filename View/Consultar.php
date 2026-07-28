<?php

namespace Projeto\ti23t\view;
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;

   session_start();

   //coletar o objeto 
  $clienteRecuperado= $_SESSION['cliente'];
   
  //chamando o metodo de consulta , para mostrar os dados dos clientes cadastrados 
  $controle= new Control($clienteRecuperado);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cliente </title>
</head>
<body>
    <h1>Consultar Cliente</h1>

    <?php 
      echo $controle->consultarCliente();//chamando o metodo de consulta, para mostrar todos os dados do cliente
    
    ?>
    <br><br>
    <a href="../Index.php"><button>Voltar </button></a>

</body>
</html>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>