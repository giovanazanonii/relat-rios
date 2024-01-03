<?php
        $nomeFilho = $_POST['nomefilho'];
        $idPai =$_POST['idPai'];
        $dataFilho = $_POST['nascimentoFilho'];
        include_once("config.php");
        $conn = conexao();

        $sql = "INSERT INTO filho(nomefilho,nascimentoFilho,idPai) VALUES('$nomeFilho','$dataFilho','$idPai')";
        $insere = mysqli_query($conn,$sql);

        if ($insere) {
            echo "Inserção na tabela filho bem-sucedida!";
        } else {
            echo "Erro na inserção: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
?>