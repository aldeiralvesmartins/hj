<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menuProduto2.php") ?>
    <?php require_once("../controller/ControllerEditarProduto.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditarProduto.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" id="valor" name="valor" value="<?php echo $editar->getValor(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>

</body>

</html>
