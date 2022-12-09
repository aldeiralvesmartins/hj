<?php
require_once("../model/bancoProduto.php");
class listarControllerProduto{

    private $lista;

    public function __construct(){
        $this->lista = new BancoProduto();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getProduto();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['valor'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editarProduto.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarProduto.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

