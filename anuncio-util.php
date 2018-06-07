<?php
        function insereAnuncio($conexao, $id_categoria, $titulo, $descricao, $destino_foto, $valor, $idUsuario){
        $comando = "insert into anuncios(id_categoria, titulo, descricao, foto, valor, id_usuario) values({$id_categoria}, '{$titulo}', '{$descricao}', '{$destino_foto}', '{$valor}', '{$idUsuario}')";
        $funcionou = mysqli_query($conexao, $comando);
        return $funcionou;
        }

        function listaAnuncios($conexao){
        $comando = "select * from anuncios order by id desc";
        return mysqli_query($conexao, $comando);
        }

        function listaAnunciosPorCategoria($conexao, $idCategoria){
        $comando = "select * from anuncios where id_categoria = {$idCategoria}";
        return mysqli_query($conexao, $comando);
        }
    
        function removeAnuncio($conexao, $id){
        $comando = "delete from anuncios where id= {$id}";
        $resultado = mysqli_query($conexao, $comando);
        return $resultado;
        }

        function buscaProdutoPorId($conexao, $id){
        $resultado = mysqli_query($conexao, "select * from anuncios where id = {$id}");
        return mysqli_fetch_assoc($resultado);
        }

        function listaAnuncioPorIdUsuario($conexao, $idUsuario){
        $comando = "select * from anuncios where id_usuario = {$idUsuario}";
        return mysqli_query($conexao, $comando);
        }

        function buscaAnuncio($conexao, $id){
        $comando = "select * from anuncios where id = {$id}";
        $resultado = mysqli_query($conexao, $comando);
        $anuncio = mysqli_fetch_assoc($resultado);
        return $anuncio;
        }

        function alteraAnuncio($conexao, $id_categoria, $titulo, $descricao, $destino_foto, $valor, $idUsuario, $id){
        $comando = "update anuncios set id_categoria={$id_categoria}, titulo='{$titulo}', descricao='{$descricao}', foto='{$destino_foto}', valor={$valor}, id_usuario={$idUsuario} where id = {$id}";
        $resultado = mysqli_query($conexao, $comando);
        return $resultado;
        }
?>
