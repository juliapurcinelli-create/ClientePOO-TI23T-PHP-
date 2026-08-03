<?php
  namespace Projeto\ti23t\view;
  require_once('../DAO/cadastrar.php'); // agora estamos conectando com o Banco de Dados 
  require_once('../DAO/conexao.php');
  require_once('../model\cliente.php');
  require_once('../control\ClienteControl.php');
  use Projeto\ti23t\model\Cliente;
  use Projeto\ti23t\control\Control;
  use Projeto\ti23t\DAO\Conexao;
  use Projeto\ti23t\DAO\Cadastrar;

  $conexao= new Conexao();
  $inserir= new Cadastrar();
  $mensagem= "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente </title>
</head>
<body>
    <h1>Cadastrar Cliente </h1>
    <form method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" id="nome"/><br><br>

    <label>Telefone:</label>
    <input type="number" name="telefone" id="telefone"/> <br><br>

    <label>Endereço:</label>
    <input type="text" name="endereco" id="endereco"/> <br><br>
    
    <label>Data de Nascimento:</label>
    <input type="date" name="dataDeNascimento" id="dataDeNascimento"/> <br><br>

    <button type="submit">Cadastrar

     <?php 
      session_start();// abrir uma sessao ,para  pegar os dados recebidos assim que apertar o botao cadastrar 
     //coletando dados 
     if(isset($_POST['nome'])){
     $nome =             $_POST['nome'];
     $telefone =         $_POST['telefone'];
     $endereco =         $_POST['endereco'];
     $dataDeNascimento = $_POST['dataDeNascimento'];

     $mensagem= $inserir->cadastrarCliente($conexao,$nome,$telefone,$endereco,$dataDeNascimento);





     // passando no objeto cliente 
     //$cliente= new Cliente($codigo,$nome,$telefone,$endereco,$dataDeNascimento);
   

     // a sessao pode ser utilizada para transferir dados de uma tabela para outra 

      //$_SESSION['codigo'] = $codigo;
                   
                    //transferindo o objeto todo
                   // $_SESSION["cliente"]            =$cliente;


    }
     
     ?>

    </button>
  
    </form>
    
    <?php 
      if(isset($_POST['nome']))
    {
      echo $mensagem;
    }
    else
    {  
        echo"preencha os campos!";

    }

    ?>


    
<a href="../Index.php">Voltar</button></a>

</body>
</html>