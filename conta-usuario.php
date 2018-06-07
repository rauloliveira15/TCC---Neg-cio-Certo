<?php   include("cabecalho.php");
        include("usuario-util.php");


    $idUsuario = $_SESSION['idUsuarioLogado'];
    $usuario = buscaUsuarioPorId($conexao, $idUsuario);

?>
 <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 style="font-weight: bold;">Minha conta</h3><br><br>
                        <form action="altera-usuario.php" class="form-horizontal" name="formAlteraUsuario" method="post" enctype="multipart/form-data">
                            <input type="text" class="hidden" name="fotoAtual" value="<?= $usuario['foto']; ?>"/>
                            <fieldset>
                                <input class="hidden" type="number" name="id" value="<?= $usuario['id']; ?>">
                                <div class="form-group col-md-4">
                                    <label for="Nome" style="font-weight: bold; margin-top: 8px;">Nome</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" name="nome" required placeholder="Nome" value="<?= $usuario['nome']; ?>"><br></div>
                                <div class="form-group col-md-4">
                                    <label for="Contato" style="font-weight: bold; margin-top: 8px;">Contato</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" name="contato" required value="<?= $usuario['contato']; ?>"><br></div>
                                <div class="form-group col-md-4">
                                    <label for="Foto" style="font-weight: bold; margin-top:8px;">Foto</label></div>
                                <div class="form-group col-md-8">
                                    <img src="<?= $usuario['foto']; ?>" class="img-thumbnail" style="margin-top: 8px; margin-left:15px; width:150px; height:130px";>
                                    <br>
                                    <input class="form-control" type="file" name="foto" id="fotoUsuario"></div>
                                <div class="form-group col-md-4">
                                    <label for="Email" style="font-weight: bold; margin-top: 8px;">Email</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" name="email" required placeholder="Email" value="<?= $usuario['email']; ?>"><br></div>
                                <div class="form-group col-md-4">
                                    <label for="Senha" style="font-weight: bold; margin-top: 8px;">Senha</label></div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="password" name="senha" required placeholder="Senha" value="<?= $usuario['senha']; ?>"><br></div>

                                    <input class="btn btn-primary" type="submit" style="width: 150px;" value="Alterar"><br><br>
                                    <a href="perfil.php" class="btn btn-primary" style="width: 150px;">Voltar</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php   include("rodape.php"); ?>