<?php
        include("cabecalho.php"); 
        
        $mensagem = $_POST["mensagem"];
        $idVendedor = $_POST["idVendedor"];
        $idProduto = $_POST["idProduto"];
        $idUsuarioLogado = $_SESSION["idUsuarioLogado"];
        $data = date('d/M/y H:m:s');
        
        function enviaMensagem($conexao, $mensagem, $idUsuarioLogado, $idVendedor, $data, $idProduto){
            $comando = "insert into mensagens(mensagem,id_usuario,id_vendedor,data, id_produto) values('{$mensagem}', {$idUsuarioLogado}, {$idVendedor}, str_to_date('{$data}','%d/%m/%Y %H:%i:%s'), {$idProduto})";
            return mysqli_query($conexao, $comando);
        }
    
        $funcionou = enviaMensagem($conexao, $mensagem, $idUsuarioLogado, $idVendedor, $data, $idProduto);
   
        if ($funcionou) {
    ?>
        <p class="alert alert-info">Mensagem enviada com sucesso!</p><br><br>
           <script>
        setInterval(function(){
            window.location = "mensagem-enviada.php";    
        }, 1500);
        
    </script>
    
        
    <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">Erro ao enviar mensagem. Detalhe <?= $mensagemErro; ?></p>
 
        
    <?php
        }
    ?>
<?php include("rodape.php"); ?>