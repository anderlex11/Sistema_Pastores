<?php
include_once('conexion.php');

$sentencia= $base_de_datos->query("SELECT * FROM pastor;");
$pastores=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($pastor);

?>