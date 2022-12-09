<?php

require_once("../init.php");
class BancoProduto{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setProduto($nome,$valor){
        $stmt = $this->mysqli->prepare("INSERT INTO Produtos (`nome`,`valor`) VALUES (?,?)");
        $stmt->bind_param("ss",$nome,$valor);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getProduto(){
        $result = $this->mysqli->query("SELECT * FROM Produtos");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteproduto($id){
        if($this->mysqli->query("DELETE FROM `Produtos` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaProduto($id){
        $result = $this->mysqli->query("SELECT * FROM Produtos WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateProduto($nome,$valor,$id){
        $stmt = $this->mysqli->prepare("UPDATE `Produtos` SET `nome` = ?, `valor`=? WHERE `nome` = ?");
        $stmt->bind_param("sss",$nome,$valor,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
