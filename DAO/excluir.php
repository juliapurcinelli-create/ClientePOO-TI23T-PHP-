<?php

 namespace Projeto\ti23t\DAO;
 require_once('Conexao.php');

use Exception;
use mysqli;
use Projeto\ti23t\DAO\Conexao;

class Excluir
{
  function excluirCliente(Conexao $conexao, int $codigo)
  {
    try 
    {
       $conn= $conexao -> conectar();
       $sql = "delete from clienteti23t where codigo= '$codigo'" ;
       $result= mysqli_query($conn, $sql);
       mysqli_close($conn);

       if($result)
       {
        return "<br> <br> Excluido Com Sucesso";
       }
       return" <br> <br> Nao Excluido ! " ;
    }
    catch(Exception $erro)
    {
           echo $erro;
    }
  }
}// fim da classe 


?>