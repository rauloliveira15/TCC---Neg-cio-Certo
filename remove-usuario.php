<?php   include("cabecalho.php");
        include("usuario-util.php");
?>

    <?php
        $id = $_GET["id"];
    
        $funcionou = removeUsuario($conexao, $id);
   
        if ($funcionou) {
    ?>
        <p class="alert alert-info">Usuário removido com sucesso!</p><br><br>
            <script>
        setInterval(function(){
            window.location = "administra-usuario.php";    
        }, 1500);
        
    </script>
    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">Erro ao remover usuário. Detalhe <?= $mensagemErro; ?></p>
            <script>
        setInterval(function(){
            window.location = "administra-usuario.php";    
        }, 1500);
        
    </script>
    <?php
        }
    ?>
<?php include("rodape.php"); ?>