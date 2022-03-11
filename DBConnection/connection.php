<?php 
$servername = "localhost";
$database = "regadmin_db";
$username = "root";
$password = "";
// Creando conexión con la Base de Datos
$conn = mysqli_connect($servername, $username, $password, $database);
// Verificación de la conexión 
if (!$conn) {
    die("Conexión Fallida: " . mysqli_connect_error());
}



?>