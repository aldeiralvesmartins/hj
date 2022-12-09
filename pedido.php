<!DOCTYPE HTML>
<html>
<?php include("view/head.php") ?>

<body>
    <?php include("view/menuCliente.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome Cliente" required autofocus>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="CPF" required>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="nome Produto" required>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="Quantidade" required>
                <input class="form-control" type="number" id="quantidade" name="quantidade" placeholder="Valor total" required>
                <input class="form-control" type="date" id="data" name="data" placeholder="Data da Compra" required>   
                <input class="form-control" type="text" id="preco" name="preco" placeholder="status" onkeypress="formatarMoeda();" required>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>
Footer
