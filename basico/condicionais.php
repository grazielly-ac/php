<?php
$bool = true && false;
var_dump($bool);

$bool = true and false;
var_dump($bool);

$bool = (true and false);
var_dump($bool);

$result = 7 === 7 xor 9 > 7;
echo "<br>Resolução : 7 === 6 xor 9 > 7 = "; var_dump($result);

$result = 7 === 6 xor 9 < 7;
echo "<br>Resolução : 7 === 6 xor 9 < 7 = "; var_dump($result);

$result = 4 + 5 * 3;
echo "<br>Resolução : 4 + 5 * 3 = "; var_dump($result);

$variavelUm = true;
$variavelDois = true;
$variavelTres = false;

//ELSE IF e ELSEIF possuem o mesmo sentido e retorno nesse caso

if($variavelUm === $variavelDois && $variavelUm === $variavelTres){
    echo "<br>Sim, são iguais";
}else if($variavelUm !== $variavelDois && $variavelUm === $variavelTres){
    echo "<br> Variável dois é diferente de um e três";
}elseif($variavelUm === $variavelDois && $variavelUm !== $variavelTres){
    echo "<br> Variável três é diferente de um e dois";
}

$letraA = 1;
$letraB = 2;
$letraC = 3;

//elseif com : só irá funcionar se for uma unica palavra, sendo assim com o uso de : não posso usar else if
if($letraA > $letraB):
    echo "<br>A é maior que B";
    elseif($letraB > $letraC):
        echo "<br>B é maior que C";
        elseif($letraC > $letraA):
            echo "<br>C é maior que A";  
endif;

//switch case

$sorteio = rand(0,5);

echo "<br>Valor sorteado: " . $sorteio . "<br>";

switch($sorteio){
    case 0: echo " Você ganhou 2 pontos";
    break;
    case 1: echo " Você perdeu 1 ponto";
    break;
    case 2: echo " Você ganhou um bônus! Parabéns, mais 3 pontos";
    break;
    case 3: echo " Você ganhou um 1 ponto";
    break;
    default: echo " Jogue novamente";
    break;
}