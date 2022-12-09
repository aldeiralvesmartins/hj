<?php
require_once("../model/cadastroProduto.php");
class cadastroControllerProduto{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new CadastroProduto();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setValor($_POST['valor']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastroProduto.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroControllerProduto();
