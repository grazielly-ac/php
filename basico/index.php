<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com PHP e HTML - básico 1</title>
</head>
<body>
    <?php 
        $string = "Variável criada com PHP";
        $numero = 38;
        $array = ["HTML","CSS","SASS","PHP","JAVA"];

        date_default_timezone_set("America/Sao_Paulo");
        $dataHora = date("d/m/Y H:i:m");
    ?>
    <h1>Estudando PHP</h1>

    <h4>Variável do tipo String => <?=$string?></h4>
    <h4>Variável do tipo integer => <?= $numero?></h4>
    <h4>Variável do tipo array => <?= print_r($array, true) ?></h4>
    <h4>Variável com formato Locale do tipo date => <?= $dataHora ?></h4>
</body>
</html>