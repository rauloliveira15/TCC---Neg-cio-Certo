<?php   include("cabecalho.php"); 
        include("anuncio-util.php");

    $anuncios = listaAnuncios($conexao);


        foreach($anuncios as $anuncio){
                
    ?>
        
        <div class="col-sm-4">
            <div class="thumbnail" style="width:100%; height:75%; background-color:#cce0ff;">
            <img style="width: 250px; height: 220px;" src="<?= $anuncio['foto']; ?>">
            <div class="caption">
            <h3 style="height: 70px;"><?= $anuncio['titulo']; ?></h3>
            <p style="height: 80px; font-weight: bold;"><?= $anuncio['descricao']; ?></p>
            <a href="produto-detalhe.php?id=<?=$anuncio['id']?>" class="btn btn-primary" role="button">Ver mais</a>
            </div>
            </div>
        </div>
        
    <?php
         
         }

    include("rodape.php");
?>
