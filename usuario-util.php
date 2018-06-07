<?php

   function insereUsuario($conexao, $nome, $contato, $destino_foto, $email, $senha){
       $comando = "insert into usuarios(nome, contato, foto, email, senha, perfil) values('{$nome}', '{$contato}', '{$destino_foto}', '{$email}', '{$senha}', 'comum')";
       $funcionou = mysqli_query($conexao, $comando);
       return $funcionou;
    }

    function buscaUsuario($conexao, $nome){
        $resultado = mysqli_query($conexao, "select * from usuarios where nome = '{$nome}' limit 1");
        return mysqli_fetch_assoc($resultado);
    }

    function listaUsuarios($conexao){
        $comando = "select * from usuarios";
        return mysqli_query ($conexao, $comando);
    }

    function removeUsuario($conexao, $id){
        $comando = "delete from usuarios where id= {$id}";
        $resultado = mysqli_query ($conexao, $comando);
        return $resultado;
    }

    function buscaUsuarioPorId($conexao, $idUsuario) {
        $resultado = mysqli_query($conexao, "select * from usuarios where id = {$idUsuario}");
        return mysqli_fetch_assoc($resultado);
    }

    function alteraUsuario($conexao, $idUsuario, $nome, $contato, $destino_foto, $email, $senha){
        $comando = "update usuarios set nome='{$nome}', contato='{$contato}', foto='{$destino_foto}', email='{$email}', senha='{$senha}' where id= {$idUsuario}";
        $resultado = mysqli_query($conexao, $comando);
        return $resultado;
    }

?>