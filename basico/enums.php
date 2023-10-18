<?php
interface Colorido{
    public function cor():string;
}

enum Naipe: string implements Colorido{
 
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';

    public function cor():string{
        return match($this){
            Naipe::Copas, Naipe::Ouros => 'Vermelho',
            Naipe::Paus, Naipe::Espadas => 'Preto',
        };
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<table>";
echo "<tr><th>Naipe</th><th>Valor</th><th>Cor</th></tr>";
foreach (Naipe::cases() as $naipe) {
    echo "<tr><td>" . $naipe->name . "</td><td>" . $naipe->value . "</td><td>" . $naipe->cor() . "</td></tr>";
}
echo "</table>";

?>
</body>
</html>
