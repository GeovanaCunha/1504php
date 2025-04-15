<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
 
$inicio = min($num1, $num2);
$fim = max($num1, $num2);
 
echo "<h2>Números entre $inicio e $fim:</h2>";
 
for ($i = $inicio + 1; $i < $fim; $i++) {
    echo $i . "<br>";
}
 
if ($fim - $inicio <= 1) {
    echo "Não há números entre os dois valores.";
}
?>
<br>