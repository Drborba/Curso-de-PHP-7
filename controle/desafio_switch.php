<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metro -> Km</option>
        <option value="km-metro">Km -> Metros</option>
        <option value="celsius-fahrenheit">Celsius -> Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'celsius-fahrenheit':
        $temperatura = $param * FATOR_CELSIUS_FAHRENHEIT + 32;
        $mensagem = "{$param}º Celsius = {$temperatura}º Fahrenheit";
        break;
    case 'fahrenheit-celsius':
        $temperatura = ($param - 32) / FATOR_CELSIUS_FAHRENHEIT;
        $mensagem = "{$param}º Fahrenheit = {$temperatura}º Celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";