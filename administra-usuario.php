<?php   include("cabecalho.php"); 
        include("usuario-util.php");

    $usuarios = listaUsuarios($conexao);

?>
<br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
    <h3 style="font-weight: bold;">Usuários</h3><br><br>
        <div class="table-responsive">
            <table class=" table table-hover">
            <tr>
                <th style="font-weight: bold;">Nome</th>
                <th style="font-weight: bold;">Contato</th>
                <th style="font-weight: bold;">Foto</th>
                <th style="font-weight: bold;">Email</th>
                <th style="font-weight: bold;">Senha</th>
                <th style="font-weight: bold;">Perfil</th>
                <th></th>

            </tr>
            <?php 
                foreach($usuarios as $usuario){
            ?>
            <tr>
                <td style="font-weight: bold;"><?= $usuario['nome']; ?></td>
                <td style="font-weight: bold;"><?= $usuario['contato']; ?></td>
                <td><img style="width: 50px; height: 50px;"  src="<?= $usuario['foto']; ?>"></td>
                <td style="font-weight: bold;"><?= $usuario['email']; ?></td>
                <td style="font-weight: bold;"><p>******</p></td>
                <td style="font-weight: bold;"><?= $usuario['perfil']; ?></td>
                <td><a class="btn btn-danger" onclick="return confirm('Deseja realmente remover este usuário?: <?= $usuario['nome']?>');" href="remove-usuario.php?id=<?= $usuario['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Remover</a></td>
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

<?php include("rodape.php"); ?>