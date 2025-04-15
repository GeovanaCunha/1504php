<?php
$genero = $_POST["genero"];
 
$sorte_homem = [
    "Hoje é o dia para conquistar seus objetivos.",
    "A coragem te levará mais longe do que imagina.",
    "Acredite em si mesmo e vá em frente.",
];
 
$sorte_mulher = [
    "Sua luz ilumina todos ao seu redor.",
    "Você é mais forte do que pensa.",
    "Seus sonhos estão mais perto do que nunca.",
];
 
if ($genero == "homem") {
    $sorte = $sorte_homem[array_rand($sorte_homem)];
} else {
    $sorte = $sorte_mulher[array_rand($sorte_mulher)];
}
 
echo "<h2>Sua sorte: <em>$sorte</em></h2>";
?>
<br>
<a href="index.php">Voltar</a>