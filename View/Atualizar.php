<?php

 namespace Projeto\ti23t\view;
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;



  //iniciar a sessao 
  session_start();
  $clienteRecuperado= $_SESSION["cliente"];
  $controle= new Control($clienteRecuperado);
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente </title>
</head>
<body>
    <h1>Atualizar Cliente </h1>
    <form method="POST">

    <label> Codigo:</label>
    <input type="number" name="codigo" id="codigo" value="<?php echo $clienteRecuperado->codigo;?>"disabled/> 
    <br><br>

    <label>Nome:</label>
    <input type="text" name="nome" id="nome"value="<?php echo $clienteRecuperado->nome;?>"/><br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone" id="telefone"value="<?php echo $clienteRecuperado->telefone;?>"/> <br><br>

    <label>Endereço:</label>
    <input type="text" name="endereco" id="endereco"value="<?php echo $clienteRecuperado->endereco;?>"/> <br><br>
    
    <label>Data de Nascimento:</label>
    <input type="date" name="dataDeNascimento" id="dataDeNascimento"value="<?php echo $clienteRecuperado->dataDeNascimento;?>"/> <br><br>

      <button type="submit">Atualizar
        <?php 
        $resultadoNome  = $controle->atualizarNome($_POST['nome']);
        $resultadoTelefone  = $controle->atualizarTelefone($_POST['telefone']);
        $resultadoEndereco  = $controle->atualizarEndereco($_POST['endereco']);
        $resultadoData  = $controle->atualizarData($_POST['dataDeNascimento']);
        ?>
    </form>
    <?php 
     echo $resultadoNome."<br>". $resultadoTelefone."<br>".$resultadoEndereco."<br>". $resultadoData;
    
    ?>
    <br>
    <a href="../Index.php"><button>Voltar</button></a>
</body>
</html>