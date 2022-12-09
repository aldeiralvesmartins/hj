<?php
require_once("../model/bancoProduto.php");

class editarControllerProduto {

    private $editar;
    private $nome;
    private $valor;
   
    public function __construct($id){
        $this->editar = new BancoProduto();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaProduto($id);
        $this->nome         =$row['nome'];
        $this->valor        =$row['valor'];
    

    }
    public function editarFormulario($nome,$valor,$id){
        if($this->editar->updateProduto($nome,$valor,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/produto.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getValor(){
        return $this->valor;
    }
    


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerProduto($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['valor'],$_POST['id']);
}
?>
