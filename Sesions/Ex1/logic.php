
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuari = $_POST['usuari'];
    $pwd = $_POST['pwd'];

    if ($usuari === $pwd) {
        $_SESSION['usuari'] = $usuari;
    } else {
        header('Location: index.html');
        exit;
    }
}

if (!isset($_SESSION['usuari'])) {
    header('Location: index.html');
    exit;
}

$usuari = $_SESSION['usuari'];

echo "<h2>Usuario: " . htmlspecialchars($usuari) . "</h2>";

echo "<h1>Pagina de informacion 1</h1>";
echo "<p>Este es el contenido de la primera pagina.</p>";
?>
