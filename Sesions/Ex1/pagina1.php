<?php
    session_start();

if (!isset($_SESSION['usuari'])) {
    header('Location: index.html');
    exit;
}

$usuari = $_SESSION['usuari'];

echo "<h2>Usuario: " . htmlspecialchars($usuari) . "</h2>";
echo "<h1>Pagina de informacion 1</h1>";
echo "<p>Este es el contenido de la primera pagina.</p>";
echo '<br><br>';
echo '<form action="logout.php" method="POST">';
echo '<button type="submit">Cerrar sesión</button>';
echo '</form>';
echo '<br>';
echo '<a href="pagina2.php">Ir a la pagina 2</a>';
?>