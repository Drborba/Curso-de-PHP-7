<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Batman", "Rei", "Principe", "Pantera"];

$indice = array_rand($nomes);
echo "<h1><center>$nomes[$indice]</center><h1>";