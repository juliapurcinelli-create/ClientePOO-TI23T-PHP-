<?php
 namespace Projeto\ti23t\DAO;
require_once('Conexao.php');

use mysqli;
use Exception;
use Projeto\ti23t\DAO\Conexao;

class Atualizar
{
    function atualizarCliente(Conexao $conexao, int $codigo,string $campo,string $dado)
    {   
        try{
            $conn=$conexao->conectar();//abrir a conexao
            $sql="update clienteTI23T set $campo = '$dado' where codigo='$codigo'";
            $result= mysqli_query($conn,$sql);

            //fechar comando 
            mysqli_close($conn);

            // avisa o usuario se ele atualizou ou nao 
            if($result)
            {
                return"<br> <br> Atualizou com Sucesso!!";
            }

            return"<br> <br> Nao Atualizou!";
      
        }
        catch(Exception $erro)
        {
            echo $erro;
        }
    }//fim do atualizarCliente 
    

        
}// fim do atualizar 


?>