<?php
  namespace Projeto\ti23t\DAO;

use Exception;
use mysqli;

  class Conexao
  {      
       function conectar()
       {
        try  // acessar o banco de dados 
        {
            $conn=mysqli_connect('localhost','root','','cliente');

            //validaçao
            if($conn)
            {
                echo "<br> Conectado com sucesso!!";
                return $conn;
            }

            echo " algo deu errado!";

        } 
        catch(Exception $erro) // coletar o erro tecnico 
        {
           echo "Algo deu errado <br> <br> $erro";
        }

       }// fim do conectar 
       

       
  }// fim da classe 




?>