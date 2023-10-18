<?php

//Cria um array
$cars = array("Volvo", "BMW", "Toyota");

echo "Total de carros = " . count($cars) . "<br>"; //tamanho do array

//INDEXED ARRAYS - o index pode ser atribuido automaticamente pelo 0 ou manualmente
$cars2 = array("Volvo", "BMW", "Toyota");

//ou

$cars3 = [];
$cars3[0] = "Chevrolet";
$cars3[1] = "Volkswagen";
$cars3[2] = "Hyundai";

print_r($cars3);

foreach($cars3 as $car){
    echo "<br>" . $car . "<br>";
}

//ASSOCIATIVE ARRAY
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Age</th>";
echo "<th>Value</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

foreach ($age as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";

//ou

$age1['John'] = 33;
$age1['Amber'] = 28;
$age1['Rose'] = 21;
$age1['Thomas'] = 25;

echo "<table>";
echo "<thead>";
echo "<th>Age</th>";
echo "<th>Value</th>";
echo "</thead>";

echo "<tbody>";
foreach($age1 as $personAge1 => $result){
    echo "<tr>";
    echo "<td>$personAge1</td>";
    echo "<td>$result</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
//MULTIDIMENSIONAL ARRAY

$carSold = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15],
];
/* 
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Stock</th>";
echo "<th>Sold</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

foreach($carSold as $item){
    list($name, $stock, $sold) = $item;
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$stock</td>";
    echo "<td>$sold</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
 */

$headers = ["Name", "Stock", "Sold"];
 echo "<table>";
 echo "<thead>";
 echo "<tr>";
foreach($headers as $header){
    echo "<th>$header</th>";
}
 echo "</tr>";
 echo "</thead>";
 
 echo "<tbody>";
 
 foreach($carSold as $row){
    echo "<tr>";
    foreach($row as $itemCar){
        echo "<td>$itemCar</td>";
    }
    echo "</tr>";
 }
 echo "</tbody>";
 echo "</table>";
 

//SORTING ARRAY

/**
   * sort() - sort arrays in ascending order
   * rsort() - sort arrays in descending order
   * asort() - sort associative arrays in ascending order, according to the value
   * ksort() - sort associative arrays in ascending order, according to the key
   * arsort() - sort associative arrays in descending order, according to the value
   * krsort() - sort associative arrays in descending order, according to the key
 */

 echo "<h2>Ordem crescente de multidimensional</h2>";
 $carSoldCopy = $carSold;
 usort($carSoldCopy, function($a, $b){
    return strcmp($a[0], $b[0]);
 });
 echo "<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    li {
        float: left;
        margin-right: 10px;
    }
</style>";

 echo "<h3>Ordem crescente de multidimensional carSold</h3>";
foreach($carSold as $item){
    echo "<ul>";
    foreach($item as $car){
        echo "<li>$car</li>";
    }
    echo "</ul>";
}
echo "<h3>Ordem crescente de multidimensional carSoldCopy</h3>";
foreach($carSoldCopy as $item){
    echo "<ul>";
    foreach($item as $car){
        echo "<li>$car</li>";
    }
    echo "</ul>";
}
