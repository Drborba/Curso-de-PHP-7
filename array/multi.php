<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    "pessoa1" =>[
    "nome" => "Diego",
    "idade" => 26,
    "naturalidade" => "Vitória da Conquista"
    ],
    "pessoa2" =>[
        "nome" => "Rafaella",
        "idade" => "21",
        "naturalidade" => "Ibirapuera"
    ]
];

print_r($dados);
echo '<br>' . $dados["pessoa1"]['idade'];
echo '<br>' . $dados["pessoa2"]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => "54",
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1000]);