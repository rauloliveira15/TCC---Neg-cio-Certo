<?php include("cabecalho.php"); ?>

        <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="adiciona-categoria.php" class="form-horizontal">
                        <fieldset>
                            <h3 style="font-weight: bold;">Adicionar Categoria</h3><br><br>
                            <div class="form-group col-md-4">
                            <label for="Categoria" style="font-weight: bold; margin-top:8px;">Categoria</label></div>
                            <div class="form-group col-md-8">
                            <input class="form-control" type="text" name="categoria" required placeholder="Categoria"><br></div>
                    
                            <input class="btn btn-primary" type="submit" value="Adicionar" style="width:200px;"><br><br>
                            <a class="btn btn-primary" href="painel.php" style="width:200px">Voltar ao painel</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

<?php include("rodape.php"); ?>