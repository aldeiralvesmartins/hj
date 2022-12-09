<?php
require_once("../model/bancoCliente.php");

class editarControllerCliente {

    private $editar;
    private $nome;
    private $cpf;
   
    public function __construct($id){
        $this->editar = new BancoCliente();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaCliente($id);
        $this->nome         =$row['nome'];
        $this->cpf        =$row['cpf'];
    

    }
    public function editarFormulario($nome,$cpf,$id){
        if($this->editar->updateCliente($nome,$cpf,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cliente.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerCliente($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['cpf'],$_POST['id']);
}
?>
