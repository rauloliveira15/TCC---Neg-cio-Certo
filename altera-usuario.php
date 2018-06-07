<?php   include("cabecalho.php"); 
        include("usuario-util.php");
?>

    <?php
        $idUsuario = $_SESSION['idUsuarioLogado'];
        $diretorio = "imagens/salva_imagens";
        $nome = $_POST["nome"];
        $contato = $_POST["contato"];
        $foto = $_FILES["foto"];
        $fotoAtual = $_POST["fotoAtual"];

        if($foto['name'] == null){
            $destino_foto = $fotoAtual;
        } else {
            $destino_foto = $diretorio."/".$foto['name'];
            move_uploaded_file($foto['tmp_name'], $destino_foto);
        }

        //$destino_foto = $foto['name'] == null ? $fotoAtual : $diretorio."/".$foto['name'] ;

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        

       $funcionou = alteraUsuario($conexao, $idUsuario, $nome, $contato, $destino_foto, $email, $senha);
            
            if ($funcionou){
                $_SESSION['usuarioLogado'] = $nome; // atualizar o nome na sessão
        ?>
            <p class="alert alert-info">Usuario alterado com sucesso!</p><br><br>
               <script>
        setInterval(function(){
            window.location = "perfil.php";    
        }, 1500);
        
    </script>
        <?php
        } else{
            $mensagemErro = mysqli_error($conexao);
                
                echo 'foto name: ' . $destino_foto;
                
        ?>
            <p class="alert alert-danger">Erro ao alterar usuario! Detalhe <? = $mensagemErro; ?></p>
               <script>
        setInterval(function(){
            window.location = "perfil.php";    
        }, 1500);
        
    </script>
        <?php
        }
        ?>
<?php include("rodape.php"); ?>