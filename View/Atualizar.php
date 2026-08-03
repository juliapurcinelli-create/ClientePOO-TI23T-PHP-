<?php

 namespace Projeto\ti23t\view;
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  require_once('../DAO/atualizar.php');
  require_once('../DAO/conexao.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;
  use Projeto\ti23t\DAO\Atualizar;
  use Projeto\ti23t\DAO\Conexao;

  //iniciar a sessao 
  //session_start();
 // $clienteRecuperado= $_SESSION["cliente"];
 // $controle= new Control($clienteRecuperado);
  
$atualizar= new Atualizar();
$conexao= new Conexao();
$resultado="";


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
    <input type="number" name="codigo" id="codigo"/>
    <br><br>
    <label> Escolha o Campo que deseja Atualizar:</label>
    <select name="campo" id="campo">
      <option value="nome"> Nome</option>
      <option value="telefone"> Telefone</option>
      <option value="endereco"> Endereço</option>
      <option value="dataDeNascimento"> Data De Nascimento</option>
    </select>
    <br> <br>
    <label>Informe o novo Dado : </label>
    <input type="text" name="dado" id="dado"/>
    <br><br>

      <button type="submit">Atualizar
        <?php 
          $codigo = $_POST['codigo'];
          $campo = $_POST ['campo'];
          $novoDado= $_POST['dado'];

          $resultado= $atualizar-> atualizarCliente($conexao,$codigo,$campo,$novoDado);


        ?>
    </form>
    <?php 
     echo $resultado;
    
    ?>
    <br>
    <a href="../Index.php"><button>Voltar</button></a>
</body>
</html>