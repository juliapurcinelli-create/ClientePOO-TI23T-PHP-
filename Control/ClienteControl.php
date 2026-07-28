<?php

namespace Projeto\ti23t\control;// conectar os arquivos 
require_once('../model/cliente.php');// acessar o conteudo do arquivo 
use Projeto\ti23t\model\Cliente;// Acessar e indicar a classe e seus metodos 


class Control{
    private Cliente $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;// Cadastrar Cliente 
     }// fim do construct 
 
// consultar 
public function consultarCliente():string
{ 
     return "<br>código: ". $this->cliente->codigo.
             "<br>nome: ". $this->cliente->nome.
             "<br>Telefone: ". $this->cliente->telefone .
             "<br>Endereço: ". $this->cliente->endereco.
             "<br>Data De Nascimento : ". $this->cliente->dataDeNascimento;

}// fim do Método 


public function atualizarNome(string $nome):string
{
    
    
          $this->cliente->nome=$nome;
          return"$nome, atualizado com sucesso!";
       
  
}// fim do atualizar nome 

public function atualizarTelefone(string $telefone):string
{
    
          $this->cliente->telefone=$telefone;
          return"$telefone atualizado com sucesso!";
       
   
}

public function atualizarData(string $data):string
{
        $this->cliente->dataDeNascimento=$data;
          return"$data de Nascimento  atualizado com sucesso!";
       
   

}

public function atualizarEndereco(string $endereco):string
{
   
     
          $this->cliente->endereco=$endereco;
          return"$endereco   atualizado com sucesso!";
       
   

}// fim do atualizar 

public function excluir():string
{
    
    
       $this->cliente->codigo    =0;
       $this->cliente->nome   ="";
       $this->cliente->telefone   ="";
       $this->cliente-> endereco   ="";
       $this->cliente->dataDeNascimento   ="";

       return 1;


                   
}// fim do excluir 


}// fim da classe 


?>