<?php
require_once("bancoProduto.php");

class CadastroProduto extends BancoProduto {

    private $nome;
    private $valor;


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setValor($string){
        $this->valor = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getValor(){
        return $this->valor;
    }
   


    public function incluir(){
        return $this->setProduto($this->getNome(),$this->getValor());
    }
}
?>
