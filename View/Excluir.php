<?php

 namespace Projeto\ti23t\view;
 require_once('../DAO/excluir.php'); // agora estamos conectando com o Banco de Dados 
  require_once('../DAO/conexao.php');
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;
    use Projeto\ti23t\DAO\Conexao;
  use Projeto\ti23t\DAO\Excluir;


 //iniciar a sessao 
  //session_start();
  //$clienteRecuperado= $_SESSION["cliente"];
  //$controle= new Control($clienteRecuperado);// para acessar os metodos de atualizaçao 
//  $resultado=0;//instanciar ,da o valor inicial 

// instanciar 
  $conexao= new Conexao();
  $excluir= new Excluir();
  $resultado="";
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
</head>
<body>
    <h1>Excluir Cliente </h1>
    
    <form method="POST">

    
        <label>Codigo:</label>
        <input type="number" name="codigo" id="codigo">
        <br> <br> 

        <button type="submit"> Excluir 
        <?php 
        
        
        //$resultado=$controle->excluir();
         
        $resultado=$excluir-> excluirCliente($conexao,$_POST['codigo']);

        ?>
       </button>
    </form>

    <?php 
    //if($resultado==1)
   // {
       //echo " excluido com sucesso";
   // }
    //else
    //{
    //echo"confirme a exlusão";
    //}

    echo $resultado;
    
    ?>
    <br>
    <a href="../Index.php"><button>Voltar</button></a>


    
</body>
</html>