<?php
require_once("bancoCliente.php");

class CadastroCliente extends BancoCliente {

    private $nome;
    private $cpf;


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setCpf($string){
        $this->cpf = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
   


    public function incluir(){
        return $this->setCliente($this->getNome(),$this->getCpf());
    }
}
?>
