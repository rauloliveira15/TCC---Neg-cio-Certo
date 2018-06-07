<?php   include("cabecalho.php");
        include("anuncio-util.php");
?>

    <?php
        $id = $_GET["id"];
    
        $funcionou = removeAnuncio($conexao, $id);
   
        if ($funcionou) {
    ?>
        <p class="alert alert-info">Anúncio removido com sucesso!</p><br><br>
        <script>
        setInterval(function(){
            window.location = "index.php";    
        }, 2000);
        
    </script>

    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">Erro ao remover anúncio. Detalhe <?= $mensagemErro; ?></p>
        <script>
        setInterval(function(){
            window.location = "index.php";    
        }, 2000);
        
    </script>

    <?php
        }
    ?>
<?php include("rodape.php"); ?>