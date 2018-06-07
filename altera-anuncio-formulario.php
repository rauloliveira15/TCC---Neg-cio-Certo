<?php 
    include("cabecalho.php");
    include("anuncio-util.php");

    $id = $_GET["id"];
    $anuncio = buscaAnuncio($conexao, $id);
?>
        <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="altera-anuncio.php" class="form-horizontal" name="formAlteraAnuncio" method="post" enctype="multipart/form-data">
                        <fieldset>
                    <h3 style="font-weight: bold;">Alterar Anúncio</h3><br><br>
                    <input type="text" class="hidden" name="fotoAtual" value="<?= $anuncio['foto']; ?>"/>
                    <input class="hidden" type="number" name="id" value="<?= $anuncio['id']; ?>">
                    <div class="form-group col-md-3">
                        <label for="Categoria" style="font-weight: bold; margin-top:8px;">Categoria</label></div>
                    <div class="form-group col-md-9">
                            <?php
                                $categoria = listaCategoria($conexao);
                            ?>
                                <select class="form-control" name="id_categoria" required>
                            <?php
                                foreach($categoria as $c){
                            ?>
                                    <option value="<?=$c['id'];?>"><?=$c['categoria'];?></option>
                            <?php
                                }
                            ?>
                         </select></div>
                    <div class="form-group col-md-3">
                        <label for="Titulo" style="font-weight: bold;">Título</label></div>
                    <div class="form-group col-md-9">
                        <input class="form-control" type="text" name="titulo" required placeholder="Título" value="<?= $anuncio['titulo']; ?>"></div>
                    <div class="form-group col-md-3">
                        <label for="Descricao" style="font-weight: bold; margin-top:8px;">Descrição</label></div>
                    <div class="form-group col-md-9">
                        <textarea class="form-control" rows="4" name="descricao" required placeholder="Descrição"><?= $anuncio['descricao']; ?></textarea></div>
                    <div class="form-group col-md-3">
                        <label for="Foto" style="font-weight: bold; margin-top:8px;">Foto</label></div>
                    <div class="form-group col-md-9">
                        <img src="<?= $anuncio['foto']; ?>" class="img-thumbnail" style="margin-top: 5px; margin-left:15px; width:150px; height:130px";>
                        <br><br>
                        <input class="form-control" type="file" name="foto"></div>
                    <div class="form-group col-md-3">
                        <label for="Valor" style="font-weight: bold; margin-top:8px;">Valor</label></div>
                    <div class="form-group col-md-9">
                        <input class="form-control" type="text" name="valor" required  placeholder="XXXX,XX" value="<?= $anuncio['valor']; ?>"><br></div>
                    
                        <input class="btn btn-primary" type="submit" value="Alterar" style="width:200px;"><br><br>
                        <a href="anuncio-usuario.php" class="btn btn-primary" style="width: 200px;">Voltar</a>
                
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>

<?php include("rodape.php"); ?>