<?php
define('PI', '3.14');
echo PI;

echo "<hr>";

$value = NULL;
echo $value+"1";

echo "<hr>";

$num = 9;
++$num;
echo $num;

echo "<hr>";

$val = 4.33;
$adition = 55;
echo $adition+$val;

echo "<hr>";

$x = 200;
$y = 300;
if($x === $y){
    echo "Son iguales";
} else {
    echo "No son iguales";
}

echo "<hr>";

$favDay = "Wed";
switch ($favDay) {
    case 'Mon':
        echo "Mon that is my fav day";
        break;
    case 'Tue':
        echo "Tue that is my fav day";
        break;
    default:
        echo "Error";
        break;
}

echo "<hr>";

for ($i=1; $i < 14; $i++) {
    echo $i;
    $count = $i;
}

echo "<hr>";

$a = 20;
while ($a <= 40) {
    echo $a."-";
    $a++;
}

echo "<hr>";

$arr = array("PHP", "ruby", "JS", "Java");
echo count($arr);
echo "<br>";
foreach($arr as $elemento){
    echo $elemento." ";
}
echo "<br>";
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i]."/";
}

echo "<hr>";

$users = array("usuario1" => array("nombre" => "Fredy", "apellido" => "Rios"),
        "usuario2" => array("nombre" => "Juan", "apellido" => "Herrera")
);

foreach ($users as $persona) {
    echo $persona['nombre']." ".$persona['apellido']."<br>" ;
}

echo "<hr>";

function greeting(){
    echo "Hello from function!";
}

greeting();

echo "<hr>";

function suma($num1 , $num2){
    echo $num1 + $num2;
}

suma(5,10);

echo "<hr>";

echo date('Y/m/d');

echo "<hr>";

date_default_timezone_set('America/Bogota');
echo date('Y-m-d h:i:s a');

echo "<hr>";




