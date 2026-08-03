<?php

namespace Projeto\ti23t\view;
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  require_once('../DAO/consultar.php');
  require_once('../DAO/Conexao.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;
  use Projeto\ti23t\DAO\Conexao;
  use Projeto\ti23t\DAO\Consultar;


  $conexao=new Conexao();
  $consultar= new Consultar();
  $resultado="";


   //session_start();

   //coletar o objeto 
  //$clienteRecuperado= $_SESSION['cliente'];
   
  //chamando o metodo de consulta , para mostrar os dados dos clientes cadastrados 
//  $controle= new Control($clienteRecuperado);
  
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
    <form method="POST">

    <label>Codigo:</label>
    <input type="number" name="codigo" id="codigo" />
     
    <button type="submit"> CONSULTAR 
    <?php 
      //echo $controle->consultarCliente();

      //chamando o metodo de consulta, para mostrar todos os dados do cliente
      $resultado=$consultar->ConsultarCliente($conexao,$_POST['codigo']);
    ?>

    </button>
    </form>

    <br><br>
    <?php echo $resultado; ?>
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