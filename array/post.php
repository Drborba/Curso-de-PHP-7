<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id="">
    <input type="text" name="sobrenome" id="">
    <select name="sexo" id="">
        <option value="FEM">Feminino</option>
        <option value="MAS">Masculino</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_GET);