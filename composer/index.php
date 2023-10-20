<?php

require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Criação de PDF com dependência no PHP</h1>');
$mpdf->Output();