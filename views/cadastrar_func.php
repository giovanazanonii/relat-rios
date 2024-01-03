<?php
        $nomeFunci = $_POST['nomefunci'];
        $salarioFunci = $_POST['salario'];
        $data = $_POST['datafunci'];
        $setorFunci = $_POST['setorfunci'];
        include_once("config.php");
        $conn = conexao();

        $sql = "INSERT INTO funcionario(nomefunci, salario,datafunci, setorfunci) VALUES('$nomeFunci','$salarioFunci','$data','$setorFunci')";
        $insere = mysqli_query($conn,$sql);

        if ($insere) {
                echo "Inserção na tabela funcionário bem-sucedida!";
        } else {
                echo "Erro na inserção: " . mysqli_error($conn);
        }
        
        
        mysqli_close($conn);
?>