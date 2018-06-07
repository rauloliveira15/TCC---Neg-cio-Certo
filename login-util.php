<?php
    
    function auntenticacao($conexao, $nome, $senha){
        $comando = "select * from usuarios where upper(nome)=upper('{$nome}') and senha= '{$senha}'";
        $resultado = mysqli_query($conexao, $comando);
        $existe = mysqli_num_rows($resultado) > 0;
        return $existe;
    }

?>