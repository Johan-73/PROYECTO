<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "proyecto_php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
?>