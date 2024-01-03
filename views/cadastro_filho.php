<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width",initial-scale="1">
        <p style="text-align: center;"><strong>CADASTROS DE FILHOS</strong></p>

</head>
<body>
    <form style="text-align: center;" action="cadastrar_filho.php" method="post">
    <label for="nome">Digite nome filho:</label>
    <input type="text" id="usernameFilho" name="nomefilho" required>

    <br><br>

    <label for="nome">Digite id do pai:</label>
    <input type="text" id="usernameFilho" name="idPai" required>

    <br><br>

    <label for="data">Digite data de nascimento:</label>
    <input type="date" id="data" name="nascimentoFilho" required>

    <br><br>

    <input type="submit" value="Cadastrar">
    </form>

</body>
</html>