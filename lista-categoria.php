<?php
    include("cabecalho.php");

$categorias = listaCategoria($conexao);
?>
        <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="font-weight: bold;">Categorias</h3><br><br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th style="font-weight: bold;">Categoria</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($categorias as $categoria){
                        ?>
                        <tr>
                            <td style="font-weight: bold;"><?= $categoria['categoria']; ?></td>
                            <td><a class="btn btn-primary" href="altera-categoria-formulario.php?id=<?= $categoria['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Alterar</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Deseja realmente remover esta categoria?: <?= $categoria['categoria']?>');" href="remove-categoria.php?id=<?= $categoria['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Remover</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table><br>
                    <center><a class="btn btn-primary" href="painel.php">Voltar ao painel</a></center>
                </div>
            </div>
        </div>
    </div>


<?php include("rodape.php");?>