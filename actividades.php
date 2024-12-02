<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades | Ryazan Aviation Corporation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Ryazan Aviation Corporation</h1>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="sukhoi.html">Sukhoi</a></li>
                <li><a href="mikoyan.html">Mikoyan</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Aquí están tus actividades pendientes:</p>
        <ul>
            <li>Completar curso de diseño básico.</li>
            <li>Enviar proyecto de aeronaves Sukhoi.</li>
            <li>Asistir al webinar de diseño militar avanzado.</li>
        </ul>
    </main>
    <footer>
        <p>© 2024 Ryazan Aviation Corporation</p>
    </footer>
</body>
</html>
