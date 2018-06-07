<?php   include("cabecalho.php");
        
?>

    <?php

        function removeMensagem($conexao, $id){
        $comando = "delete from mensagens where id= {$id}";
        $resultado = mysqli_query($conexao, $comando);
        return $resultado;
        }

        $id = $_GET["id"];
    
        $funcionou = removeMensagem($conexao, $id);
   
        if ($funcionou) {
    ?>
        <p class="alert alert-info">Mensagem removida com sucesso!</p><br><br>
        <script>
        setInterval(function(){
            window.location = "mensagem-enviada.php";    
        }, 2000);
        
    </script>

    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">Erro ao remover mensagem. Detalhe <?= $mensagemErro; ?></p>
        <script>
        setInterval(function(){
            window.location = "mensagem-enviada.php";    
        }, 2000);
        
    </script>

    <?php
        }
    ?>
<?php include("rodape.php"); ?>