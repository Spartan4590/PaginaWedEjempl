<?php
require 'config.php';

try {
    echo "Conexión exitosa a la base de datos: $dbname";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
