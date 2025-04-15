
<?php
$numero = $_POST["numero"];
 
if ($numero > 0) {
    $aleatorio = rand(0, $numero);
    echo "<h2>Número sorteado entre 0 e $numero: <strong>$aleatorio</strong></h2>";
} else {
    echo "<p>Por favor, insira um número maior que zero.</p>";
}
?>
<br>
 