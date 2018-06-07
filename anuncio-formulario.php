<?php include("cabecalho.php"); ?>
            
        <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form id="upload form" action="adiciona-anuncio.php" class="form-horizontal" enctype="multipart/form-data" method="post" name="form">
                        <fieldset>
                    <h3 style="font-weight: bold;">O que você está vendendo?</h3><br><br>
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
                        <input class="form-control" type="text" name="titulo" required placeholder="Título"></div>
                    <div class="form-group col-md-3">
                        <label for="Descricao" style="font-weight: bold; margin-top:8px;">Descrição</label></div>
                    <div class="form-group col-md-9">
                        <textarea class="form-control" rows="4" name="descricao" required placeholder="Descrição"></textarea></div>
                    <div class="form-group col-md-3">
                        <label for="Foto" style="font-weight: bold; margin-top:8px;">Foto</label></div>
                    <div class="form-group col-md-9">
                        <input class="form-control" type="file" name="foto" required></div>
                    <div class="form-group col-md-3">
                        <label for="Valor" style="font-weight: bold; margin-top:8px;">Valor</label></div>
                    <div class="form-group col-md-9">
                            <div class="input-group">
                            <span class="input-group-addon">R$</span>
                            <input type="text" name="valor" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div><br>
                    <input class="btn btn-primary" type="submit" value="Anunciar" style="width:200px;">
                
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>


<?php include("rodape.php"); ?>