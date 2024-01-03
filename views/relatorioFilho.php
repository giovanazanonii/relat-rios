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

$sql = "SELECT filho.nomefilho, filho.nascimentoFilho, funcionario.nomefunci
        FROM filho
        INNER JOIN funcionario ON filho.idPai = funcionario.idfunci";


// A variável $pesquisa faz a execução da do nosso comando SQL
$pesquisa= mysqli_query($conexao,$sql);
// O mysqli_num_rows verifica se encontro algum resultado

if(mysqli_num_rows($pesquisa)>0){

    echo "<table border=1>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nome do Filho</th>";
    echo "<th>Data de Nascimento do Filho</th>";
    echo "<th>Nome do Responsável</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

 //mysqli_fetch_assoc converte para vetor e mostras os campos encontrados
    while($resu=mysqli_fetch_assoc($pesquisa)){
        echo "<tr>";
        echo "<td>".$resu['nomefilho']."</td>";
        echo "<td>".$resu['nascimentoFilho']."</td>";
        echo "<td>".$resu['nomefunci']."</td>";
        }
        }else{
        echo "NENHUM DADO ENCONTRADO";
        }
        echo "<a href=index.php>MENU PRINCIPAL</a>";
?> 
<body>
    
</html>