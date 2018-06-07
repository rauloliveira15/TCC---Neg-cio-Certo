<?php   include("cabecalho.php");
        include("usuario-util.php");
        include("anuncio-util.php");

    $idUsuario = $_SESSION['idUsuarioLogado'];
    $usuario = buscaUsuarioPorId($conexao, $idUsuario);

    function consultaMensagensRecebidas($conexao, $idUsuarioLogado){
        $comando = "select *, date_format(data, '%d/%m/%Y %H:%i') data_formatada from mensagens where id_vendedor = {$idUsuarioLogado} order by id desc ";
        return mysqli_query($conexao, $comando);
    }

    $idUsuarioLogado = $_SESSION["idUsuarioLogado"];
    $mensagens = consultaMensagensRecebidas($conexao, $idUsuarioLogado);
    
    foreach($mensagens as $msg){
        $idInteressado = $msg["id_usuario"];
        $idVendedor = $msg["id_vendedor"];
        $interessado = buscaUsuarioPorId($conexao, $idInteressado);
        $idProduto = $msg['id_produto'];
        $produto = buscaProdutoPorId($conexao, $idProduto);
?>


    <table class="table">
        <tr>
            <th></th>
            <th>
                <div style="text-align: center;">
                    <a style="color: white; text-shadow: 1px 1px 2px black, 0 0 1em #1a53ff, 0 0 0.2em darkblue;color: white; font-size: 20px;" href="produto-detalhe.php?id=<?= $idProduto; ?>"><?= $produto['titulo']; ?></a>
                </div>
            </th>
        </tr>
        <tr>
            <td style="col-md-4">
                <img src="<?= $interessado['foto']; ?>" class="img-thumbnail" style="margin-top: 3px; margin-left:10px; width:90px; height:90px";>
            </td>
            <td style="col-md-8">
                <textarea class="form-control" rows="4" cols="70" name="mensagem" disabled><?= $interessado['nome']; ?>   <?= $msg['data_formatada']; ?><?= $msg['mensagem']; ?></textarea>        
            </td>
        </tr>
        <tr>
            <td style="col-md-4">
                <img src="<?= $usuario['foto']; ?>" class="img-thumbnail" style="margin-top: 22px; margin-left:10px; width:90px; height:90px";>
            </td>
            <td>
            <form action="responde-mensagem.php" method="post">
                            <input type="text" class="hidden" name="destinatario" value="<?= $idInteressado; ?>">
                            <input type="text" class="hidden" name="remetente" value="<?= $idUsuarioLogado; ?>">
                            <input type="number" class="hidden" name="idProduto" value="<?= $idProduto; ?>">
                            <textarea class="form-control" rows="6" cols="70" name="mensagem">
                            </textarea><br>
                            <input class="btn btn-primary" type="submit" value="Responder mensagem" style="width:200px; margin-left:775;">
                        </form>
            </td>
        </tr>
    </table>
    
<?php 
    }
include("rodape.php"); ?>
