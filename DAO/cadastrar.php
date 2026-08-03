<?php

namespace Projeto\ti23t\DAO;
require_once('Conexao.php');

use DateTime;
use Exception;
use mysqli;
use Projeto\ti23t\DAO\Conexao;


class Cadastrar // CLASSE 
{
                    //Metodo Cadastrar 
    public function cadastrarCliente(Conexao $conexao,string $nome,string $telefone,string $endereco,string $dtNascimento)
    {
       try
       {
        $conn = $conexao-> conectar();// abre a conexao com o banco 
        $sql= "insert into clienteTI23T (codigo, nome,telefone,endereco,dataDeNascimento)
              values('','$nome','$telefone','$endereco','$dtNascimento')";
        
        $result= mysqli_query($conn,$sql); // executando o comando criado 

        //fechar  o mysql
        mysqli_close($conn);

        // verificar se inseriu ou nao o dado 
        if($result)
        {
             return "<br> <br>  Inserido com SUCESSO!!";
        }
        return "<br> <br> Nao Inserido!!";

       
       }
       catch(Exception $erro)
       {
             return "<br> <br> Impossivel cadastrar o Cliente! <br> <br> $erro ";
       } // fim do cath

    }// fim do cadastrar cliente 



} // fim da classe 


?>