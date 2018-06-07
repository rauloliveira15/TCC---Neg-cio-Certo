<?php   include("cabecalho.php");
        include("usuario-util.php");


    $diretorio = "imagens/salva_imagens";
    $nome = $_POST["nome"];
    $contato = $_POST["contato"];
    $foto = $_FILES["foto"];
    $destino_foto = $diretorio."/".$foto['name'];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

        if (move_uploaded_file($foto['tmp_name'], $destino_foto)){
            
        $funcionou = insereUsuario($conexao, $nome, $contato, $destino_foto, $email, $senha);
   
        if ($funcionou) { ?>
        <p class="alert alert-info">Cadastro efetuado com sucesso!</p><br>
        <br>
        <div class="row">
            
                <div class="panel panel-default">
                    <div class="panel-body">
        <h3 style="font-weight: bold;">Seus Dados</h3><br><br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Nome</th>
                    <th>Contato</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
                <tr>
                    <td><p><?= $nome; ?></p></td>
                    <td><p><?= $contato; ?></p></td>
                    <td><p><?= $email; ?></p></td>
                    <td><p>*****</p></td>
                </tr>
            </table>
        </div><br>
        <a href="login.php" class="btn btn-primary">Iniciar Sessão</a>
                    </div>
                </div>
            
</div>
        
    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger fade in">Erro ao efetuar o cadastro. Detalhe <?= $mensagemErro; ?></p>
        <a href="cadastro-usuario.php" class="btn btn-danger">Voltar</a>
    <?php
        }}
    

    include("rodape.php"); ?>