<?php
$destinos = array("dia_01" => array("001" => "Zazibar", "002" => "Bora Bora", "003" => "Changrilar"),
"dia_02" => array("001" => "Atol das Rocas", "002" => "Porto de galinhas", "003" => "Abrolhos"),
"dia_03" => array("001" => "Bariloche", "002" => "Machu Pichu", "003" => "Caracas"));
//$destinos = ["001" => "zanzibar", "002" => "Bora Bora", "003" => "Changrilar"];//coloca-se colchetes e não precisa escrever array
//print_r($destinos);
//echo "<br>", "<br>";
//var_dump($destinos);
var_dump($destinos["dia_01"]);
echo "<br>", "<br>";
var_dump($destinos["dia_02"]);
echo "<br>", "<br>";
var_dump($destinos["dia_03"]);
?>