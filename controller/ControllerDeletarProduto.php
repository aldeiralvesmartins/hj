<?php
require_once("../model/bancoProduto.php");
class deletaProduto {
    private $deleta;

    public function __construct($id){
        $this->deleta = new BancoProduto();
        if($this->deleta->deleteProduto($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/produto.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deletaProduto($_GET['id']);
?>
