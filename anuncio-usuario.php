<?php   include("cabecalho.php");
        include("anuncio-util.php");

    $idUsuario = $_SESSION['idUsuarioLogado'];

    $anuncios = listaAnuncioPorIdUsuario($conexao, $idUsuario);

    

?>
    <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
    <h3 style="font-weight: bold;">Meus Anúncios</h3><br><br>
        <div class="table-responsive">
            <table class=" table table-hover">
            <tr>
                <th style="font-weight: bold;">Categoria</th>
                <th style="font-weight: bold;">Produto</th>
                <th style="font-weight: bold;">Descrição</th>
                <th style="font-weight: bold;">Foto</th>
                <th style="font-weight: bold;">Valor</th>
                <th></th>
                <th></th>
            </tr>
            <?php 
                foreach($anuncios as $anuncio){
            ?>
            <tr>
                <td style="font-weight: bold;"><?= $anuncio['id_categoria']; ?></td>
                <td style="font-weight: bold;"><?= $anuncio['titulo']; ?></td>
                <td style="font-weight: bold;"><?= $anuncio['descricao']; ?></td>
                <td><img style="width: 50px; height: 50px;"  src="<?= $anuncio['foto']; ?>"></td>
                <td style="font-weight: bold;"><?= 'R$'.$anuncio['valor']; ?></td>
                <td><a class="btn btn-primary" href="altera-anuncio-formulario.php?id=<?= $anuncio['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Alterar</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('Deseja realmente remover este anúncio?: <?= $anuncio['titulo']?>');" href="remove-anuncio.php?id=<?= $anuncio['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Remover</a></td>
            </tr>
            <?php
            }
            ?>
            </table><br>      
        </div>
                </div>
            </div>
</div>

<?php include("rodape.php");?>