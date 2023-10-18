<?php

//String
$frase = "Deus sabe de todas as coisas (sem HTML)";
$textoComHtml = "<h1>Texto com HTML (com HTML)</h1>";

echo $frase;
echo $textoComHtml;

//Integers/números - integer(32 bits) ou long(64 bits)
$numeroUm = 10;
$numeroDois = 10.5;
$array = array(1,2, -5, ["a","b","c", 15.4]);

//Esta função mostrará uma representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.
var_dump($numeroUm);
var_dump($numeroDois);
var_dump($array);

//Datas
echo "<br>Dia " . date("d");
echo "<br>Mês " . date("m");
echo "<br>Ano " . date("y");
echo "<br>Dia " . date("D");
echo "<br>Mês " . date("M");
echo "<br>Ano " . date("Y");

//Temos que setar o timezone
date_default_timezone_set('America/Sao_Paulo');
echo "<br>Hora: " . date("h");
echo "<br>Minuto: " . date("i");
echo "<br>Segundo: " . date("s");

$data = date("d/m/Y");
$hora = date("H:i:s");
$dataHora = date("d/m/Y H:i:s");
echo "<br><h3>Data do ano: <span style='font-weight:normal;font-size: 16px;'>{$data}</span></h3>";
echo "<h3>Hora: <span style='font-weight:normal;font-size: 16px;'>$hora</span></h3>";
echo "<h3>Data e hora: <span style='font-weight:normal;font-size: 16px;'>$dataHora</span></h3>";

//ARRAY

$linguagens = ["Java", "Javascript", "PHP", "C"];
$cursos = array("Curso de Java", "Curso de Javascript", "Curso de PHP");

foreach($linguagens as $linguagem){
    echo "$linguagem <br>";
}

echo "<ul>";
foreach($cursos as $curso){
     echo "<li>$curso</li>";  
}
echo "</ul>";

//enum
enum Status{
    case Ativo;
    case Inativo;
    case Pendente;
}

function statusSistema(Status $status): Status{
    return $status;
}

echo "<br>";
print statusSistema(Status::Ativo)-> name;

enum StatusEscalar:string{
    case Ativo = 'Ativo';
    case Inativo = 'Inat';
    case Pendente = 'Pendente';
}
echo "<br>";
print StatusEscalar::Inativo -> value;