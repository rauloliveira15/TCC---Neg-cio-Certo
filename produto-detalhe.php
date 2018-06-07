<?php   include("cabecalho.php"); 
        include("anuncio-util.php");
        include("usuario-util.php");

    $id = $_GET["id"];

    $produto = buscaProdutoPorId($conexao, $id);
    $idVendedor = $produto["id_usuario"];

    $vendedor = buscaUsuarioPorId($conexao, $idVendedor);
    ?>
        <br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                        <h1 style="height: 70px; font-weight: bold;"><?= $produto['titulo']; ?></h1>
                        <img style="width: 250px; height: 220px;" src="<?= $produto['foto']; ?>"><br><br>
                        <h3 style="font-weight:bold;">Descrição do produto</h3><br>
                        <h4 style="font-weight: bold;"><?= $produto["descricao"]; ?></h4><br>
                        <h3 style="font-weight:bold;">Dados do vendedor</h3><img style="width: 60px; height: 60px;"  src="<?= $vendedor['foto']; ?>"><br>
                        <h4 style="font-weight: bold;"><?= $vendedor["contato"] . ' / ' . $vendedor['nome'];  ?></h4>
                    
                        <h4 style="font-weight: bold;"><?= 'Valor: ' .'R$' . $produto["valor"]; ?></h4>
                    
                        <br>
                        <?php if($idVendedor != $_SESSION["idUsuarioLogado"]){ ?>
                        <h3 style="font-weight:bold;">Ficou interessado? Envie uma mensagem.</h3>
                        <form action="envia-mensagem.php" method="post">
                            <input type="text" class="hidden" name="idVendedor" value="<?= $idVendedor; ?>">
                            <input type="text" class="hidden" name="idProduto" value="<?= $id; ?>">
                            <textarea class="form-control" rows="6" cols="70" name="mensagem">
                            </textarea><br>
                            <input class="btn btn-primary" type="submit" value="Enviar Mensagem" style="width:200px;">
                        </form>
                        <?php } ?>
    
                </div>
            </div>
        </div>

<?php include("rodape.php"); ?>


