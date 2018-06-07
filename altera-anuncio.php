<?php   error_reporting(0); ?>
<?php   include("cabecalho.php");
        include("anuncio-util.php");

$diretorio = "imagens/salva_imagens";
$id_categoria = $_POST["id_categoria"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$foto = $_FILES["foto"];
$fotoAtual = $_POST["fotoAtual"];
$id = $_POST["id"];


        if($foto['name'] == null){
            $destino_foto = $fotoAtual;
        } else {
            $destino_foto = $diretorio."/".$foto['name'];
            move_uploaded_file($foto['tmp_name'], $destino_foto);
        }

$valor = $_POST["valor"];
$idUsuario = $_SESSION['idUsuarioLogado'];


    $funcionou = alteraAnuncio($conexao, $id_categoria, $titulo, $descricao, $destino_foto, $valor, $idUsuario, $id);


        if ($funcionou){ ?>
            <p class="alert alert-info">Anúncio alterado com sucesso!</p><br><br>
               <script>
        setInterval(function(){
            window.location = "anuncio-usuario.php";    
        }, 1500);
        
    </script>
            
<?php
            sleep(2);
            header("location:lista-anuncios-categoria.php?id_categoria=" + $id_categoria);
        } else {
		$mensagemErro= mysqli_error($conexao) ?>
            <p class="alert alert-danger">Erro ao alterar anúncio. Detalhe <?= $mensagemErro; ?></p>
               <script>
        setInterval(function(){
            window.location = "anuncio-usuario.php";    
        }, 1500);
        
    </script>
            
    
<?php
           }

		   include("rodape.php");
		   
?>