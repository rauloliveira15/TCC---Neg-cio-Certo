<?php
        include("cabecalho.php"); 
        
        $mensagem = $_POST["mensagem"];
        $remetente = $_POST["remetente"];
        $idProduto = $_POST["idProduto"];
        $destinatario = $_POST["destinatario"];
        $data = date('d/M/y H:i:s');
        
        function enviaMensagem($conexao, $mensagem, $idVendedor, $idUsuarioLogado, $data, $idProduto){
            $comando = "insert into mensagens(mensagem,id_vendedor,id_usuario,data,id_produto) values ('{$mensagem}', {$idVendedor}, {$idUsuarioLogado}, str_to_date('{$data}','%d/%m/%Y %H:%i:%s'), {$idProduto})";
            return mysqli_query($conexao, $comando);
        }
    
        $funcionou = enviaMensagem($conexao, $mensagem, $destinatario, $remetente, $data, $idProduto);
   
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
           <!--<script>
        setInterval(function(){
            window.location = "index.php";    
        }, 1500);
        
    </script> -->
        
    <?php
        }
    ?>
<?php include("rodape.php"); ?>