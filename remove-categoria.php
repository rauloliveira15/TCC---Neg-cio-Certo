<?php include("cabecalho.php"); ?>

    <?php
        $id = $_GET["id"];
    
        $funcionou = removeCategoria($conexao, $id);
   
        if ($funcionou) {
    ?>
        <p class="alert alert-info">Categoria removida com sucesso!</p><br><br>
            <script>
        setInterval(function(){
            window.location = "lista-categoria.php";    
        }, 1500);
        
    </script>
    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">Erro ao remover categoria. Detalhe <?= $mensagemErro; ?></p>
            <script>
        setInterval(function(){
            window.location = "lista-categoria.php";    
        }, 1500);
        
    </script>
    <?php
        }
    ?>
<?php include("rodape.php"); ?>