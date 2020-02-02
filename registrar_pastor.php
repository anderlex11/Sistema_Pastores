<?php
include_once("conexion.php");
$codigo=$_POST["codigo"];
$carnet=$_POST["carnet"];
$primernombre=$_POST["primernombre"];
$segundonombre=$_POST["segundonombre"];
$tercernombre=$_POST["tercernombre"];
$primerapellido=$_POST["primerapellido"];
$segundoapellido=$_POST["segundoapellido"];
$dpi=$_POST["dpi"];
$fechanacimiento=$_POST["fechanacimiento"];
$telefono=$_POST["telefono"];
$clasificacion=$_POST["clasificacion"];
$estudiosbiblicos=$_POST["estudiosbiblicos"];
$estudiosseculares=$_POST["estudiosseculares"];
$fechainicio=$_POST["fechainicio"];
$estado=$_POST["estado"];
$fecharetiro=$_POST["fecharetiro"];

$sentencia=$base_de_datos->prepare("INSERT INTO pastor(ID_PASTOR, CARNET,PRIMER_NOMBRE,SEGUNDO_NOMBRE,TERCER_NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,DPI,FECHA_NACIMIENTO,TELEFONO,CLASIFICACION,ESTUDIOS_BIBLICOS,ESTUDIOS_SECULARES,INICIO_SERVICIO,ESTADO,FIN_SERVICIO)
VALUES(:carnet,:primernombre,:segundonombre,:tercernombre,:primerapellido,:segundoapellido,:dpi,:fechanacimiento,:telefono,:clasificacion,:estudiosbiblicos,:estudiosseculares,:fechainicio,:estado,:fecharetiro);");

$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':carnet',$carnet);
$sentencia->bindParam(':primernombre',$primernombre);
$sentencia->bindParam(':segundnombre',$segundonombre);
$sentencia->bindParam(':tercernombre',$tercernombre);
$sentencia->bindParam(':primerapellido',$primerapellido);
$sentencia->bindParam(':segundoapellido',$segundoapellido);
$sentencia->bindParam(':dpi',$dpi);
$sentencia->bindParam(':fechanacimiento',$fechanacimiento);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':clasificacion',$clasificacion);
$sentencia->bindParam(':estudiosbiblicos',$estudiosbiblicos);
$sentencia->bindParam(':estudiosseculares',$estudiosseculares);
$sentencia->bindParam(':fechainicio',$fechainicio);
$sentencia->bindParam(':estado',$estado);
$sentencia->bindParam(':fecharetiro',$fecharetiro);

if ($sentencia->execute()) {
    return header("Location:index.php");
}
else {
    return "error";
}

?>