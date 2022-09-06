<?php 
#MONOLITICO 
include 'conetar.php';
$tipo_documento = $_POST["tipoDocumento"];
$numero_de_documento = $_POST["numeroDocumento"];
$nombres_completos = $_POST["nombresCompletos"];
$apellidos = $_POST["apellidos"];
$numero_movil = $_POST["telefonoCelular"];
$numero_fijo = $_POST["telefonoFijo"];
$correo_electronico = $_POST["correoElectronico"];
$municipio = $_POST["municipio"];
$direccion = $_POST["direccion"];
$fecha_de_nacimiento = $_POST["fechaNacimiento"];
$etnia = $_POST["etnia"];
$condicion_de_discapacidad = $_POST["condicionDiscapacidad"];
$estrato_de_residencia = $_POST["estratoResidencia"];

#Identificacion

$guardar1 = mysqli_query($conetar,"INSERT INTO identificacion(tipo_documento, numero_de_documento, nombres_completos, apellidos) VALUES ('$tipo_documento','$numero_de_documento','$nombres_completos','$apellidos')");

#Contacto

$guardar2 = mysqli_query($conetar,"INSERT INTO contato(numero_movil, numero_fijo, correo_electronico) VALUES ('$numero_movil','$numero_fijo','$correo_electronico')");

#Geografia

$guardar3 = mysqli_query($conetar,"INSERT INTO geografia(municipio, direccion) VALUES ('$municipio','$direccion')");

#ENFOQUE DIFERENCIAL

$guardar4 = mysqli_query($conetar,"INSERT INTO enfoque_diferencial(fecha_de_nacimiento, etnia) VALUES ('$fecha_de_nacimiento','$etnia')");

#ENFOQUE POBLACIONAL

$guardar5 = mysqli_query($conetar,"INSERT INTO enfoque_poblacion(condicion_de_discapacidad) VALUES ('$condicion_de_discapacidad')");

#SOCIOECONOMICO

$guardar6 = mysqli_query($conetar,"INSERT INTO socioeconomico(estrato_de_Residencia) VALUES ('$estrato_de_residencia')");

?>