<?php
/*Declaração de variáveis*/
//entregador ganha R$100 por dia + gorjetas
$valorDia = 100.00;
$gorjetas = 40.00; //exemplo em uma segunda
$diaria = $valorDia + $gorjetas;

//$diariaReal = number_format($diaria, 2, ',','.');
$fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
$diariaReal = $fmt->formatCurrency($diaria, 'BRL');
echo "Segunda-feira: $diariaReal";

$gorjetas = 20.00;
$diaria = $valorDia + $gorjetas;
$diariaReal = $fmt->formatCurrency($diaria, 'BRL');
echo "\nTerça-feira: $diariaReal";

/**Declaração de constantes - valor salvo que não pode sofrer alteração*/
define("pagamentoDia", 80.00);
define("gorjetaDia", 40.00);
$pagamento = pagamentoDia + gorjetaDia;
$fmtDois = new NumberFormatter('pt_BR', NumberFormatter::MONETARY_SEPARATOR_SYMBOL);
$fmtPagamento = $fmtDois->formatCurrency($pagamento, 'BRL');
echo "\nPagamento: $fmtPagamento";
