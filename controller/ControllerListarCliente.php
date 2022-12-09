<?php
require_once("../model/bancoCliente.php");
class listarControllerCliente{

    private $lista;

    public function __construct(){
        $this->lista = new BancoCliente();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCliente();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editarCliente.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarCliente.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

