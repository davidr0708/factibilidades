<?php
include('config.php');
$codigo_cad          = $_REQUEST['codigo_cad'];
$departamento 	     = $_REQUEST['departamento'];
$nombre_cad 	     = $_REQUEST['nombre_cad'];
$opcion              = $_REQUEST['opcion'];
$direccion 	         = $_REQUEST['direccion'];
$barrio 	         = $_REQUEST['barrio'];
$latitud             = $_REQUEST['latitud'];
$longitud 	         = $_REQUEST['longitud'];
$fecha 	             = $_REQUEST['fecha'];
$estado              = $_REQUEST['estado'];
$canal_principal 	 = $_REQUEST['canal_principal'];
$canal_backup 	     = $_REQUEST['canal_backup'];


$QueryInsert = ("INSERT INTO factibilidades(
    codigo_cad,
    departamento,
    nombre_cad,
    opcion,
    direccion,
    barrio,
    latitud,
    longitud,
    fecha,
    estado,
    canal_principal,
    canal_backup
)
VALUES (
    '".$codigo_cad. "',
    '".$departamento. "',
    '".$nombre_cad. "',
    '".$opcion. "',
    '".$direccion. "',
    '".$barrio. "',
    '".$latitud. "',
    '".$longitud. "',
    '".$fecha. "',
    '".$estado. "',
    '".$canal_principal. "',
    '".$canal_backup. "'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>
