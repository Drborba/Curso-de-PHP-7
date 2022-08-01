<div class="titulo">If e Else</div>

<?php

if(true) {
    echo "Serei impresso?<br>";
};

if (true) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso<br>";
}
    
if(false) {
    echo "Passo A<br>";
} else if(true) {
    echo "Passo B<br>";
} else if(true) {
    echo "Passo C<br>";
} else {
    echo "Último Passo<br>";
}

echo "Fim<br>";
