<?php   
        include ("cabecalho.php");
        if(isset($_GET['e'])){
        $e = $_GET['e'];
        if($e == 1){
            echo "<script type='text/javascript'>alert('Usuário ou senha inválido')</script>";
            }
            }
?>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <h3 style="font-weight: bold;">Iniciar Sessão</h3><br><br>
                    <form method="post" action="validar_usuario.php" class="form-horizontal">
                        <fieldset>
                 
                    <div class="form-group col-md-4">
                        <label for="Nome" style="font-weight: bold; margin-top: 8px;">Nome</label></div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" name="nome" required placeholder="Usuário"></div>
                    <div class="form-group col-md-4">
                        <label for="Senha" style="font-weight: bold; margin-top: 8px;">Senha</label></div>
                    <div class="form-group col-md-8">
                        <input type="password" name="senha" class="form-control" required placeholder="Senha"><br></div>
                        
                        <input type="submit" class="btn btn-primary" value="Login" style="margin:5px; margin-left: 2%; width: 150px;"><br><br>
                        <a class="btn btn-primary" href="cadastro-usuario.php" role="button" style="margin:5px; margin-left: 2%; width: 160px;">Criar uma nova conta</a>
                    </fieldset>
                    </form>
                        
                    </div>
                </div>
            </div>
        </div>

<?php include ("rodape.php"); ?>