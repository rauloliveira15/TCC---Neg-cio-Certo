<?php   include("cabecalho.php");
        include("usuario-util.php");
        include("anuncio-util.php");

    function consultaMensagensRecebidas($conexao, $idUsuario){
        $comando = "select *, date_format(data, '%d/%m/%Y %H:%i') data_formatada  from mensagens where id_usuario = {$idUsuario} order by id desc";
        return mysqli_query($conexao, $comando);
    }

    $idUsuarioLogado = $_SESSION["idUsuarioLogado"];
    $mensagens = consultaMensagensRecebidas($conexao, $idUsuarioLogado);
    
    foreach($mensagens as $msg){
        $idInteressado = $msg["id_usuario"];
        $interessado = buscaUsuarioPorId($conexao, $idInteressado);
        $idOutro = $msg["id_vendedor"];
        $idOutro = buscaUsuarioPorId($conexao, $idOutro);
        $idProduto = $msg['id_produto'];
        $produto = buscaProdutoPorId($conexao, $idProduto);
?>

    <table class="table">
        <th></th>
            <th>
                <div style="text-align: center;">
                    <a style="color: white; text-shadow: 1px 1px 2px black, 0 0 1em #1a53ff, 0 0 0.2em darkblue;color: white; font-size: 20px;" href="produto-detalhe.php?id=<?= $idProduto; ?>"><?= $produto['titulo']; ?></a>
                </div>
            </th>
        <tr>
            <td style="col-md-4">
                <img src="<?= $interessado['foto']; ?>" class="img-thumbnail" style="margin-top: 10px; margin-left:30px; width:80px; height:80px";>
            </td>
            
            <td style="col-md-8">
                <textarea class="form-control" rows="4" cols="70" name="mensagem" disabled><?= $idOutro['nome']; ?>   <?= $msg['data_formatada']; ?><?= $msg['mensagem']; ?>     
                </textarea></td>
        </tr><tr>
        <td style="col-md-4"></td>
        <td style="col-md-8"><a style="margin-left:850;" class="btn btn-danger" onclick="return confirm('Deseja realmente remover esta mensagem?: <?= $msg['mensagem']?>');" href="remove-mensagem.php?id=<?= $msg['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Remover</a></td></tr>
            
    
<?php 
    }
include("rodape.php"); ?>