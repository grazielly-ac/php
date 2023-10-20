<?php

//incremento e decremento
echo "Pós-incremento<br>";
$a = 5;
echo "Deve ser 5: " . $a++ . "<br>";
echo "Deve ser 6: " . $a . "<br>";

echo "Pré-incremento<br>";
$b = 5;
echo "Deve ser 6: " . ++$b . "<br>";
echo "Deve ser 6: " . $b . "<br>";

echo "Pós-decremento<br>";
$c = 5;
echo "Deve ser 5: " . $c-- . "<br>";
echo "Deve ser 4: " . $c . "<br>";

echo "Pré-decremento<br>";
$d = 5;
echo "Deve ser 4: " . --$d . "<br>";
echo "Deve ser 4: " . $d . "<br>";

//?null?
$x = null;
echo "Incremento de null = " . $x++ . "<br>";
echo "Incremento de null = " . $x . "<br>";
$y = null;
echo "Decremento de null = " . --$x . "<br>";
echo "Decremento de null = " . $x . "<br>";

$numeros = [3,6,9,5,2,1];
$numerosSort = $numeros;

//sort($numerosSort);
rsort($numerosSort);
foreach($numerosSort as $num){
    echo $num . ' ';
}

for ($i=0; $i < count($numerosSort); $i++) { 
    echo "<p>$numerosSort[$i]</p>";
}

$cores = ['Azul','Amarelo','Vermelho','Verde','Branco'];
$qtdCores = count($cores);

$condicao = 0;

while($condicao < $qtdCores){
    $condicao++;
    echo "<br>While $condicao";
}

$condicaoDo = 0;
do{
    $condicaoDo++;
    echo "<br>Do-while $condicaoDo";
}while($condicaoDo < $qtdCores);