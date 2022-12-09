<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menuCliente2.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastroCliente.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Cliente" required autofocus>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="CPF" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>
