<?php
$genero = $_POST["genero"];
 
$sorte_homem = [
    "Vc é homem",
    "Vai trabalhar",
    "A luz queimou",
];
 
$sorte_mulher = [
    "Vc é mulher",
    "Vc é legal",
    "Comprar Sapato",
];
 
if ($genero == "homem") {
    $sorte = $sorte_homem[array_rand($sorte_homem)];
} else {
    $sorte = $sorte_mulher[array_rand($sorte_mulher)];
}
 
echo "<h2>Sua sorte: <em>$sorte</em></h2>";
?>
<br>