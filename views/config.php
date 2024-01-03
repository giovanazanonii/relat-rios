<?php
function conexao(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodados = "empresa254x";
    $conectar = mysqli_connect($servidor,$usuario,$senha,$bancodados);
    return $conectar;
}
?>