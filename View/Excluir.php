<?php

 namespace Projeto\ti23t\view;
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;


 //iniciar a sessao 
  session_start();
  $clienteRecuperado= $_SESSION["cliente"];
  $controle= new Control($clienteRecuperado);// para acessar os metodos de atualizaçao 
  $resultado=0;//instanciar ,da o valor inicial 
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
</head>
<body>
    <h1>Exluir Cliente </h1>
      <?php echo "Deseja excluir o cliente ".$clienteRecuperado->código."?"?>
 
    <form method="POST">
       <button type="submit">Excluir
        <?php 
        $resultado=$controle->excluir();
        ?>
       </button>
    </form>

    <?php 
    if($resultado==1)
    {
       echo " excluido com sucesso";
    }
    else
    {
    echo"confirme a exlusão";
    }
    
    ?>
    <br>
    <a href="../Index.php"><button>Voltar</button></a>


    
</body>
</html>