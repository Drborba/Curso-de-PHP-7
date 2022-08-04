<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);


// print_r($meses);
// echo '<br>' . $meses[6];

foreach($meses as $indice => $valor) {

    echo "$indice => $valor . <br>";

}