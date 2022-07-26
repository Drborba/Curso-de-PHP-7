<div class="titulo">Variáveis variáveis</div>

<?php
$a = 'ValorA';
$$a = 'ValorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo "$epa {$$epa} {$$$epa}";