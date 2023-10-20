<?php

function divisao($dividendo, $divisor){
    if(!$divisor){
        throw new RangeException();
    }

    $resultado = $dividendo / $divisor;

    echo "Resultado - " . $resultado;
}

try{
    divisao(10,0);
}catch(RangeException){//php8
    echo "Exceção capturada: O numero não pode ser dividido por zero!<br>";
}