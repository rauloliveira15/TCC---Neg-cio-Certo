<?php include("cabecalho.php"); ?>

    <?php
    
    $categoria = $_GET["categoria"];
    
        $funcionou = insereCategoria($conexao, $categoria);
   
        if ($funcionou) {
    ?>
        <p class="alert alert-info">Categoria adicionada com sucesso!</p><br><br>
                <script>
        setInterval(function(){
            window.location = "categoria-formulario.php";    
        }, 1500);
        
        </script>
    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">Erro ao adicionar categoria. Detalhe <?= $mensagemErro; ?></p>
                <script>
        setInterval(function(){
            window.location = "categoria-formulario.php";    
        }, 1500);
        
        </script>
    <?php
        }
    ?>
<?php include("rodape.php"); ?>