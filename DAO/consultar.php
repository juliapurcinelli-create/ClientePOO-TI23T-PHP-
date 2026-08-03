<?php 
 
namespace Projeto\ti23t\DAO;
require_once('Conexao.php');

use Exception;
use mysqli;
use Projeto\ti23t\DAO\Conexao;



class Consultar 
{ 
    function ConsultarCliente(conexao $conexao,int $codigo)
    {
        try
        { 
           $conn=$conexao-> conectar();// abre a conexao 
           $sql="select * from clienteTI23T where codigo= '$codigo'";
           $result=mysqli_query($conn,$sql);
           
           while($dados = mysqli_fetch_array($result))
           {
                if($dados ['codigo']== $codigo)
                {
                    return'<br> Código:'.$dados['codigo'].
                          '<br> Nome:'.$dados['nome'].
                          '<br>Telefone:'.$dados['telefone'].
                          '<br>Endereço:'.$dados['endereco'].
                          '<br>Data de Nascimento:'.$dados['dataDeNascimento'];                                            

                }
           }
        }
        catch(Exception $erro)
        {
            echo" Algo deu errado <br> <br> $erro";

        }

    }//fim do consultarCliente 

}// fim da classe Consultar 



?>