<?php 
$user = $_POS["root"];
$password = $_POS[""];
$base = $_POS["senasoft_2022"];
$local = $_POS["localhot"]

$conetar = mysqli_connect($local, $user, $password, $base)

if(!$conetar)
{echo "no se pudo conectar con la base";}
else
{echo "conexion exitosa";}
?>