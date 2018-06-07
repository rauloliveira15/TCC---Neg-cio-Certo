<?php
   function insereCategoria($conexao, $categoria){
        $comando = "insert into categorias(categoria) values('{$categoria}')";
        $funcionou = mysqli_query($conexao, $comando);
        return $funcionou;
   }

    function listaCategoria($conexao){
        $comando = "select * from categorias";
        return mysqli_query($conexao, $comando);
    }

    function removeCategoria($conexao, $id){
        $comando = "delete from categorias where id= {$id}";
        $resultado = mysqli_query($conexao, $comando);
        return $resultado;
    }

    function buscaCategoria($conexao, $id){
        $comando = "select * from categorias where id = {$id}";
        $resultado = mysqli_query($conexao, $comando);
        $categoria = mysqli_fetch_assoc($resultado);
        return $categoria;
    }

    function alteraCategoria($conexao, $id, $categoria){
        $comando = "update categorias set categoria='{$categoria}' where id= {$id}";
        $resultado = mysqli_query($conexao, $comando);
        return $resultado;
    }
?>