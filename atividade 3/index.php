<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Sorte</title>
</head>
<body>
    <h2>Escolha seu gênero e receba uma sorte</h2>
    <form action="calcular.php" method="post">
        <label>
            <input type="radio" name="genero" value="homem" required> Homem
        </label><br>
        <label>
            <input type="radio" name="genero" value="mulher"> Mulher
        </label><br><br>
        <button type="submit">Receber sorte</button>
    </form>
</body>
</html>