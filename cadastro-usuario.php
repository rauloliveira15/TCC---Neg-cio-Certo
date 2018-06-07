<?php include("cabecalho.php"); ?>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 style="font-weight: bold;">Cadastrar-se</h3><br><br>
                        <form id="upload form" action="adiciona-usuario.php" class="form-horizontal" enctype="multipart/form-data" method="post" name="form">
                            <fieldset>
                                <div class="form-group col-md-4">
                                    <label for="Nome" style="font-weight: bold; margin-top: 8px;">Nome</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" name="nome" required placeholder="Nome"><br></div>
                                <div class="form-group col-md-4">
                                    <label for="Contato" style="font-weight: bold; margin-top: 8px;">Contato</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" name="contato" required placeholder="(XXX) XXXXX-XXXX"><br></div>
                                <div class="form-group col-md-4">
                                    <label for="Foto" style="font-weight: bold; margin-top:8px;">Foto</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="file" name="foto" required></div>
                                <div class="form-group col-md-4">
                                    <label for="Email" style="font-weight: bold; margin-top: 8px;">Email</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" name="email" required placeholder="Email"><br></div>
                                <div class="form-group col-md-4">
                                    <label for="Senha" style="font-weight: bold; margin-top: 8px;">Senha</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="password" name="senha" required placeholder="Senha"><br></div>

                                    <input class="btn btn-primary" type="submit" style="width: 150px;" value="Cadastrar-se">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include("rodape.php"); ?>
    
    