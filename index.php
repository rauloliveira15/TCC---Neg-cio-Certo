<!-- Inclusão das páginas de cabeçalho e anuncio-util -->
<?php   include("cabecalho.php"); 
        include("anuncio-util.php");

   // Recebe por método GET um parametro enviado como verificação do cabecalho e abre um script com mensagem para o usuário 
    if(isset($_GET['cod']) && $_GET['cod'] == 12){
        echo "<script type='text/javascript'>alert('Entre ou cadastre-se!')</script>";
        ?>

    <?php }
    // Armazena a função listaAnuncios na variavel $anuncios
    $anuncios = listaAnuncios($conexao);
?>
    <!-- Estilo css do bootstrap para alerta -->
    <div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>Adicionados recentemente</p>
    </div><br><br>
    
    <!-- Abre um código php-->
   <?php
    // Inicia um contador a partir do 1 e armazena em $i
        $i = 1;
    // Inicia um laço que percorre a variavel $anuncios
        foreach($anuncios as $anuncio){
    // Cria uma condição se $i for maior que 3
            if($i > 3){
    // O laço é interrompido
                break;
            }
    // Fecha o código php
    ?>
    
    <!-- Abre uma div de colunas do bootstrap -->
        <div class="col-sm-4">
    <!--Abre a div de moldura do bootstrap e modifica alguns estilos -->
            <div class="thumbnail" style="width:100%; height:75%; background-color:#cce0ff;">
    <!-- Chama a imagem do anúncio salva no banco de dados-->
            <img style="width: 250px; height: 220px;" src="<?= $anuncio['foto']; ?>">
            <div class="caption">
    <!-- Chama o título do anúncio salvo no banco de dados-->
            <h3 style="height: 70px;"><?= $anuncio['titulo']; ?></h3>
    <!-- Chama a descrição salva no banco de dados -->
            <p style="height: 80px; font-weight: bold;"><?= $anuncio['descricao']; ?></p>
    <!-- Estilo de botão do bootstrap que chama a página que mostra os detalhes do produto -->
            <a href="produto-detalhe.php?id=<?=$anuncio['id']?>" class="btn btn-primary" role="button">Ver mais</a>
    <!-- Fecha as divs abertas acima -->
            </div>
            </div>
        </div>
    <?php
    // Implementa o contador php
            $i++;
    }?>
    <!-- Estilo de botão do bootstrap que chama a página que mostra todos os anúncios -->
    <a class="btn btn-primary" href="lista-todos-anuncios.php" style="width:200px; margin-top: 30px;">Ver todos</a>
    <?php
    // Inclui a página de rodapé
        include("rodape.php");
    ?>





