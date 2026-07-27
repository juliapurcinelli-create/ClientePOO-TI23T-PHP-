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


public function atualizarNome(int $codigo,string $nome):string
{
    if($this->cliente->codigo ==$codigo)
    { 
          $this->cliente->nome=$nome;
          return"Nome atualizado com sucesso!";
       
    }
    else
    { 
      return"nome nao atualizado!";
    }  
}

public function atualizarTelefone(int $codigo,string $telefone):string
{
    if($this->cliente->codigo ==$codigo)
    { 
          $this->cliente->telefone=$telefone;
          return"Telefone atualizado com sucesso!";
       
    }
    else
    { 
      return"Telefone nao atualizado!";
    }  
}

public function atualizarData(int $codigo,string $data):string
{
    if($this->cliente->codigo ==$codigo)
    { 
          $this->cliente->dataDeNascimenti=$data;
          return"Data de Nascimento  atualizado com sucesso!";
       
    }
    else
    { 
      return"Data de Nascimento nao atualizado!";
    }  
    
   

}

public function atualizarEndereco(int $codigo,string $endereco):string
{
    if($this->cliente->codigo ==$codigo)
    { 
          $this->cliente->endereco=$endereco;
          return"Endereço   atualizado com sucesso!";
       
    }
    else
    { 
      return"Endereço nao atualizado!";
    }       

}// fim do atualizar 

public function excluir(int $codigo):string
{
    if($this->cliente->codigo==$codigo)
    {
       $this->cliente->codigo    =0;
       $this->cliente->nome   ="";
       $this->cliente->telefone   ="";
       $this->cliente-> endereco   ="";
       $this->cliente->dataDeNascimento   ="";

       return"Cliente $codigo excluido com sucesso";

                   
    }else
    {
       return"Cliente $codigo nao encontrado!";
    }
}// fim do excluir 


}// fim da classe 


?>