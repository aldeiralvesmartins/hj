<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menuProduto.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastroProduto.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Produto" required autofocus>
                <input class="form-control" type="text" id="valor" name="valor" placeholder="Valor" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>
