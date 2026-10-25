
<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = [];
}

$productes = [
    'camiseta' => ['nom' => 'Camiseta', 'preu' => 15],
    'zapatillas' => ['nom' => 'Zapatillas', 'preu' => 50]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = $_POST['producto'];
    $cantidad = (int) $_POST['cantidad'];

    if (isset($productes[$producto]) && $cantidad > 0) {
        if (!isset($_SESSION['cistella'][$producto])) {
            $_SESSION['cistella'][$producto] = 0;
        }

        $_SESSION['cistella'][$producto] += $cantidad;
    }

    header('Location: cistella_compra.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cesta</title>
</head>
<body>

    <h1>Mi cesta</h1>

    <?php
    $total = 0;

    foreach ($_SESSION['cistella'] as $producto => $cantidad) {
        $nombre = $productes[$producto]['nom'];
        $precio = $productes[$producto]['preu'];
        $subtotal = $precio * $cantidad;
        $total += $subtotal;

        echo "<p>$nombre - $precio € x $cantidad = $subtotal €</p>";
    }

    echo "<h2>Total: $total €</h2>";
    ?>

    <a href="index.html">Volver a la tienda</a>

    <form action="confirmar_compra.php" method="POST">
        <button type="submit">Confirmar compra</button>
    </form>

</body>
</html>
