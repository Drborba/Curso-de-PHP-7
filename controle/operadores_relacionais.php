<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false


var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = 26;

if($idade < 18) {
    echo "Menor de idade";
} else if($idade < 65) {
    echo "Adulto";
} else {
    echo "Terceira idade";
};

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 30);

echo '<p class="divisao">Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!-1);