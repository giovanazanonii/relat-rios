<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width",initial-scale="1">
        <p style="text-align: center;"><strong>CADASTROS DE FUNCIONÁRIOS</strong></p>

</head>
<body>
    <form style="text-align: center;" action="cadastrar_func.php" method="post">
    <label for="nome">Digite o nome do funcionário:</label>
    <input type="text" id="usernameFunc" name="nomefunci" required>

    <br><br>

    <label for="salario">Digite salário do funcionário:</label>
    <input type="text" id="salario" name="salario" required>

    <br><br>

    <label for="setor">Digite setor do funcionário:</label>
    <input type="text" id="setor" name="setorfunci" required>
    <br><br>
    <label for="data">Digite data da admissão:</label>
    <input type="date" id="data" name="datafunci" required>

    <br><br>
    <input type="submit" value="Cadastrar">
    </form>

</body>
</html>