<?php 
    include("cabecalho.php"); 

    $id = $_GET["id"];
    $categoria = buscaCategoria($conexao, $id);
?>
        <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="altera-categoria.php" class="form-horizontal">
                        <fieldset>
                        <h3 style="font-weight: bold;">Alterar categoria</h3><br><br>
                            <input class="hidden" type="number" name="id" value="<?= $categoria['id']; ?>">
                        <div class="form-group col-md-4">
                            <label for="Categoria" style="font-weight: bold; margin-top:8px;">Categoria</label></div>
                        <div class="form-group col-md-8">
                            <input class="form-control" type="text" value="<?= $categoria['categoria']; ?>" name="categoria" required><br></div>

                            <input class="btn btn-primary" type="submit" value="Alterar" style="width:200px;"><br><br>
                            <a class="btn btn-primary" href="lista-categoria.php" style="width:200px;">Voltar</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

<?php include("rodape.php"); ?>