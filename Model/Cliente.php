<?php 

namespace Projeto\ti23t\model;

use DateTime;

class Cliente{

  // encapsulamento: definir as variaveis como Private 
  
  private int $codigo;
  private string $nome;
  private string $telefone;
  private string $endereco;
  private string $dataDeNascimento;

  
    // Primeiro coisa a fazer : criar um construtor 
    public function __construct(int $codigo,string $nome,string $telefone,string $endereco,string $dataDeNascimento)
    {
         $this->codigo    =$codigo;
         $this->nome      =$nome;
         $this->telefone  = $telefone;
         $this->endereco   = $endereco;
         $this->dataDeNascimento = $dataDeNascimento;

    }//fim do construtor -> mesma coisa que o metodo Cadastrar 

   // metodo GETs e Sets

   public function __get(string $dados):mixed
   {
     return $dados;
   }//fim do get

   public function __set(string $variavel, string $novoDado):void
   {
     $this->variavel = $novoDado;
   }// fim do set 

}// fim da classe 
?>