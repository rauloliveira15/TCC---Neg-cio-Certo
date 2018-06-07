<?php   include("conexao.php");
        include("categoria-util.php");

    session_start();
    $paginaAtual = $_SERVER['PHP_SELF'];
    
    $teste = 'login.php';
    $ePaginaLogin = substr_compare($paginaAtual, $teste, strlen($paginaAtual) - strlen($teste), strlen($teste)) === 0;

    $teste2 = 'cadastro-usuario.php';
    $ePaginaUsuario = substr_compare($paginaAtual, $teste2, strlen($paginaAtual) - strlen($teste2), strlen($teste2)) === 0;

    $teste3 = 'adiciona-usuario.php';
    $ePaginaAdiciona = substr_compare($paginaAtual, $teste3, strlen($paginaAtual) - strlen($teste3), strlen($teste3)) === 0;
    
    $teste4 = 'index.php';
    $ePaginaIndex = substr_compare($paginaAtual, $teste4, strlen($paginaAtual) - strlen($teste4), strlen($teste4)) === 0;

    $teste5 = 'lista-todos-anuncios.php';
    $ePaginaAnuncios = substr_compare($paginaAtual, $teste5, strlen($paginaAtual) - strlen($teste5), strlen($teste5)) === 0;

    $teste6 = 'produto-detalhe.php';
    $eProdutoDetalhe = substr_compare($paginaAtual, $teste6, strlen($paginaAtual) - strlen($teste6), strlen($teste6)) === 0;

    if(!$ePaginaLogin && !isset($_SESSION['usuarioLogado']) && !$ePaginaUsuario && !$ePaginaAdiciona && !$ePaginaIndex && !$ePaginaAnuncios){
        
       header('location:index.php?cod=' . ($eProdutoDetalhe ? 12 : 0));
    }
?>
    <html>
    <head>
        <title>Negócio Certo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="imagens/logo1.png">
        <link href="css/meu.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <!--<link href="css/carousel.css" rel="stylesheet">-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            body{
                background-image: url(imagens/fundo6.jpg);
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -ms-background-size: cover;
                -o-background-size: cover;
            }
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
                background-color: #FFFFFF;
                font-size: 16px;
            }

            .navbar-default .navbar-nav > li > a {
                color: #000000;
                margin: 0px 15px;
                cursor: pointer;
            }

            .navbar-right {
                margin-right: 0px;    
            }

            .navbar-default .navbar-nav > li > a:hover {
                color: #1a75ff;
                background-color: transparent;
            }

            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
                color: #1a75ff;
                background-color: transparent;
            }

            .navbar-default .navbar-nav > .open > a,
            .navbar-default .navbar-nav > .open > a:hover,
            .navbar-default .navbar-nav > .open > a:focus {
                color: #1a75ff;
                background-color: transparent;
            }

            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #1a75ff;
                background-color: transparent;
                font-size: 16px;
            }

            .navbar-default .navbar-nav .open .dropdown-menu > li > a {	
                color: #000000;
            }


            .dropdown-menu {
                padding: 15px 14px;
                margin: 0px;
                font-size: 16px;
                border: none;
                box-shadow: none;
                border-radius: 0;
                color: #000000;
            }

            .navbar-toggle .icon-bar {
                width: 24px;
                height: 3px;
                border-radius: 0px;
            }

            .navbar-default .navbar-toggle {
                border: none;
            }

            .navbar-default .navbar-toggle:hover,
            .navbar-default .navbar-toggle:focus {
                background-color: transparent;
            }

            .navbar-default .navbar-collapse,
            .navbar-default .navbar-form {
                border-color: transparent;
            }

            .navbar-default .navbar-toggle .icon-bar {
                background-color: #000000;
            }
        </style>
        </head>
        <body>
                    <center><img src="imagens/banner2.png" class="img-responsive" width="1400">
                    <div class="container-top">
                    <nav class="navbar navbar-default navbar-static-top">
                    <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.php"><span class="glyphicon glyphicon-home"></span>&ensp;Negócio Certo</a>
                                </li>
                                    <?php
                                        if(isset($_SESSION['usuarioLogado'])){
                                    ?>
                                <li>
                                    <a href="anuncio-formulario.php"><span class="glyphicon glyphicon-list-alt"></span>&ensp;Inserir Anúncio</a>
                                </li>
                                    
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-search"></span>&ensp;Anúncios <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <?php
                                    $categoria = listaCategoria($conexao);
                        
                                        foreach($categoria as $c){
                                    ?>
                                        <li><a href="lista-anuncios-categoria.php?id_categoria=<?= $c['id']; ?>"><?=$c['categoria'];?></a>
                                    <?php
                                    }
                                    ?>
                                    </ul>
                                    </li>
                                    </ul>
                                    <?php } ?>
                                    
                                    <?php
                                        if (!isset($_SESSION['usuarioLogado'])){
                                     ?> 
                                    <ul class="nav navbar-nav navbar-right" style="padding-left:820px;">
                                        
                                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&ensp;Entrar</a></li>
                                    </ul>
				                    <?php
                                    }
                                    ?>
                                        
                                    <?php
                                        if(isset($_SESSION['usuarioLogado'])){
                                    ?>
                                    <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger"></span><span class="text-capitalize">&ensp;<?php echo  $_SESSION['usuarioLogado'];?></span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <?php
                                        if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioPerfil'] == 'administrador'){
                                    ?>
                                    <li><a href="painel.php"><span class="glyphicon glyphicon-cog"></span>&ensp;Administrar</a></li>
                                    <?php } else { ?>
                                    <li><a href="perfil.php"><span class="glyphicon glyphicon-user"></span>&ensp;Perfil</a></li>
                                    <?php } ?>
                                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&ensp;Sair</a></li>
                                    <?php
                                        } 
                                        ?>
                                    </ul>
                                    </ul>
                                    </ul>      
                                    </li>
                                </div>
                            </div>
                        </div>
                        </nav>
                        </div>
                    <div class="container">
                        <div class="principal">