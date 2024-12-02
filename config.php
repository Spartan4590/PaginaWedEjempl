<?php
$host = 'fdb1028.awardspace.net'; // Nombre del servidor
$dbname = '4558652_ryazancursos'; // Nombre de la base de datos
$username = '4558652_ryazancursos'; // Usuario de la base de datos
$password = 'CHDavid24/'; // Contraseña de la base de datos

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=3306", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
