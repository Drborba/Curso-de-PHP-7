<div class="titulo">Desafio For</div>

<!-- 
    #
    ##
    ###
    ####
    #####
    1) Pode usar incremento ex: $i++
    2) Não pode usar incremento ex: $i++
 -->

 <?php

$array = ['#', '##', '###', '####', '#####'];

for($i = 0; $i <= count($array); $i++) {

    echo "{$array[$i]} <br>";

}