<?php
require_once './ChangeString.php';
require_once './CompleteRange.php';
require_once './ClearPar.php';

$cadena = "123 abcd*3";
$obj = new ChangeString();
$res = $obj->build($cadena);
echo 'PROBLEMA 01 <br>';
echo "Ud. ingreso: ".utf8_decode($cadena);
echo "<br>";
echo "El resultado: ".utf8_decode($res);
echo "<br><br>";

$numeros = array(2,6,20);
$obj = new CompleteRange();
$res2 = $obj->build($numeros);
echo 'PROBLEMA 02 <br>';
echo "Ud. ingreso: ";
echo "<pre>";
print_r($numeros);
echo "</pre>";
echo "El resultado: ";
echo "<pre>";
print_r($res2);
echo "</pre>";
echo "<br><br>";

$par = "23452135234";
$obj = new ClearPar();
$res3 = $obj->build($par);
echo 'PROBLEMA 03 <br>';
echo "Ud. ingreso: ";
echo "<pre>";
print_r($par);
echo "</pre>";
echo "El resultado: ";
echo "<pre>";
print_r($res3);
echo "</pre>";

?>