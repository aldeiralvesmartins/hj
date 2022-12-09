<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menuCliente2.php") ?>
    <?php require_once("../controller/ControllerEditarCliente.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditarCliente.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" id="cpf" name="cpf" value="<?php echo $editar->getCpf(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>

</body>

</html>
