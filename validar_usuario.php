<?php error_reporting(0); ?>

<?php   include("cabecalho.php");  
        include("login-util.php"); 
        include("usuario-util.php");

        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $funcionou = auntenticacao($conexao, $nome, $senha);
        if($funcionou){
            $_SESSION['usuarioLogado']= $nome;
            $usuario = buscaUsuario($conexao, $nome);
            $_SESSION['usuarioPerfil'] = $usuario['perfil'];
            $_SESSION['idUsuarioLogado'] = $usuario['id'];
            header('location:index.php?perfil=' . $usuario['perfil']);
        } else {
            unset($_SESSION['usuarioLogado']);
            header('location:login.php?e=1');
        }

        include("rodape.php");
?>
