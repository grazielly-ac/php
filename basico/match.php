<?php

$idade = 32;

$resultado = match(true){
    $idade >= 65 => 'idoso',
    $idade >= 25 => 'adulto',
    $idade >= 16 => 'adolescente',
    default => 'criança',
};
var_dump($resultado);
echo '<br>';

$comida = 'suco';

$prato = match($comida){
    'bolo', 'balinha', 'chocolate' => "Doce",
    'salgado', 'salgadinho', 'pastel' => "Sal",
    'cerveja', 'suco', 'refrigerante' => "Bebida",
};

print($prato);