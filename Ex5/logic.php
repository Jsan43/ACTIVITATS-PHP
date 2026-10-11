<?php
if ($_POST) {
    $preu = $_POST['preu'];
    $iva = $_POST['iva'];

    if ($iva == 21) {
        $total = $preu * 1.21;
    } elseif ($iva == 10) {
        $total = $preu * 1.10;
    } elseif ($iva == 4) {
        $total = $preu * 1.04;
    }

    echo "El preu amb IVA és: " . number_format($total, 2) . "€";
}