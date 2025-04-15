<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
 
$min = min($num1, $num2);
$max = max($num1, $num2);
 
$aleatorio = rand($min, $max);
 
echo "<h2>Número sorteado entre $min e $max: <strong>$aleatorio</strong></h2>";
?>
<br>
<a href="index.php">Voltar</a>