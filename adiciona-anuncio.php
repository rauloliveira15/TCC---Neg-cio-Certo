<?php error_reporting(0); ?>
<?php   include("cabecalho.php");
        include("anuncio-util.php");

$diretorio = "imagens/salva_imagens";
$id_categoria = $_POST["id_categoria"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$foto = $_FILES["foto"];
$destino_foto = $diretorio."/".$foto['name'];
$valor = $_POST["valor"];
$idUsuario = $_SESSION['idUsuarioLogado'];

    if (move_uploaded_file($foto['tmp_name'], $destino_foto)){
	

    $funcionou = insereAnuncio ($conexao, $id_categoria, $titulo, $descricao, $destino_foto, $valor, $idUsuario);


        if ($funcionou){ ?>
            <p class="alert alert-info">Anúncio adicionado com sucesso!</p><br><br>
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
            <p class="alert alert-danger">Erro ao adicionar anúncio. Detalhe <?= $mensagemErro; ?></p>
            <script>
        setInterval(function(){
            window.location = "anuncio-usuario.php";    
        }, 1500);
        
    </script>

?>
    
<?php
           } }

		   include("rodape.php");
		   
?>