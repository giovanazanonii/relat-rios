<html>
<style>
    body {
    text-align: center;
    }

    table {
    margin: 0 auto;
    text-align: left;
    }

</style>

<body>
        
<?php
include_once("config.php");
$conexao = conexao();

$sql = "SELECT * FROM funcionario";

// A variável $pesquisa faz a execução da do nosso comando SQL
$pesquisa= mysqli_query($conexao,$sql);
// O mysqli_num_rows verifica se encontro algum resultado

if(mysqli_num_rows($pesquisa)>0){
    echo "<table border=1>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nome do Funcionário</th>";
    echo "<th>Salário</th>";
    echo "<th>Data de Admissão</th>";
    echo "<th>Setor</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
 //mysqli_fetch_assoc converte para vetor e mostras os campos encontrados
    while($resu=mysqli_fetch_assoc($pesquisa)){
        echo "<tr>";
        echo "<td>".$resu['nomefunci']."</td>";
        echo "<td>".$resu['salario']."</td>";
        echo "<td>".$resu['datafunci']."</td>";
        echo "<td>".$resu['setorfunci']."</td>";
        }
        
        }else{
        echo "NENHUM DADO ENCONTRADO";
        }
        echo "<a href=index.php>MENU PRINCIPAL</a>";
?> 
<body>
    
</html>