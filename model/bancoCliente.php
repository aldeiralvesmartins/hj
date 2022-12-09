<?php

require_once("../init.php");
class BancoCliente{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCliente($nome,$cpf){
        $stmt = $this->mysqli->prepare("INSERT INTO clientes (`nome`,`cpf`) VALUES (?,?)");
        $stmt->bind_param("ss",$nome,$cpf);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM clientes");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCliente($id){
        if($this->mysqli->query("DELETE FROM `clientes` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCliente($id){
        $result = $this->mysqli->query("SELECT * FROM clientes WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCliente($nome,$cpf,$id){
        $stmt = $this->mysqli->prepare("UPDATE `clientes` SET `nome` = ?, `cpf`=? WHERE `nome` = ?");
        $stmt->bind_param("sss",$nome,$cpf,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
