<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar entre dois números</title>
</head>
<body>
    <h2>Informe dois números para gerar um valor aleatório entre eles</h2>
    <form action="calcular.php" method="post">
        <label for="num1">Primeiro número:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Segundo número:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <button type="submit">Gerar número</button>
    </form>
</body>
</html>